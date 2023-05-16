<?php

namespace App\Controller;

use App\Form\EditPsswFormType;
use App\Form\SendPasswordRecuperationCodeType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use DateTime;

class ForgetPasswordController extends AbstractController
{
    #[Route('/recuperation-mot-de-passe', name: 'app_forget_password', methods:['GET'])]
    public function index(Request $request, UtilisateurRepository $UtilisateurRepository, MailerInterface $mailer): Response
    {
        $form = $this->createForm(SendPasswordRecuperationCodeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $response = $form->getData();
            $utilisateur = $UtilisateurRepository->findOneBySomeField('email', $response['email']);

            if ($utilisateur !== null){
                
                $now = new \DateTime();
                $dateLimit = $now->modify('+1 day');
                
                $codeRecup = hash("sha256", random_bytes(64));

                $utilisateur->setCodeRecup($codeRecup);
                $utilisateur->setRecupDate($dateLimit);

                $UtilisateurRepository->save($utilisateur, true);

                $email = (new TemplatedEmail())
                    ->from(new Address('emile00013@gmail.com'))
                    ->to(new Address($response['email']))    
                    ->subject('Email de récupération de mot de passe')
                    ->htmlTemplate('mail/password_recup.html.twig')
                    ->context([
                            'name' => $utilisateur->getNomUtilisateur(),
                            'code_recuperation' => $codeRecup
                    ]);
                $mailer->send($email);

            }

        }   

        return $this->render('forget_password/index.html.twig', [
            "form_send_recup_code" => $form->createView(),
            'controller_name' => 'Mot de passe oublié'
        ]);
    }

    #[Route('/modifier-le-mot-de-passe/{code_recup}', name: 'app_edit_password', methods:['POST'])]
    public function editPassword(string $code_recup, UtilisateurRepository $utilisateurRepository, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager) : response
    {

        $utilisateur = $utilisateurRepository->findOneBySomeField('codeRecup', $code_recup);
        if ($utilisateur !== null) {
            
            $date_recup = $utilisateur->getRecupDate();
            $now = new \DateTime();
            
            if ($date_recup > $now)   {   

                $form = $this->createForm(EditPsswFormType::class, null, [
                    'attr' => ['id' => 'password-edit-form', 'class'=>'mb-5 mt-5']]);
                $form->handleRequest($request);
    
                if ($form->isSubmitted() && $form->isValid()){
    
                    $utilisateur->setPassword(
                        $userPasswordHasher->hashPassword(
                            $utilisateur,
                            $form->get('password')->getData()
                        )
                    );
                    
                    $utilisateur->setCodeRecup(null);
                    $utilisateur->setRecupDate(null);
                    $utilisateurRepository->save($utilisateur, true);
                    
                    return new JsonResponse(["status" => true]);
    
                }
                
            } else {
                
                $utilisateur->setCodeRecup(null);
                $utilisateur->setRecupDate(null);
                $entityManager->persist($utilisateur);
                $entityManager->flush();
    
                return $this->render('forget_password/editpw.html.twig', [

                    'erreur' => 'La date limite pour modifier le mot de passe a expirée. Renseignez une segonde fois votre addresse mail pour changer de mot de passe.',
                    'controller_name' => 'Modification du mot de passe',
                
                ]);
                
            }

            return $this->render('forget_password/editpw.html.twig', [
                'controller_name' => 'Modification du mot de passe',
                'edit_pssw_form' => $form->createView()
            ]);

        }

        return $this->render('forget_password/editpw.html.twig', [
            'controller_name' => 'Modification du mot de passe',
            'erreur' => 'Votre mot de passe a déjà été mis à jour ou votre lien de modification de mot de passe est invalide.'

        ]);
       

       
    }
}
