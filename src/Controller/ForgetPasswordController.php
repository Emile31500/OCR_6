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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class ForgetPasswordController extends AbstractController
{
    #[Route('/recuperation-mot-de-passe', name: 'app_forget_password')]
    public function index(Request $request, UtilisateurRepository $UtilisateurRepository, MailerInterface $mailer): Response
    {
        $form_send_recup_code = $this->createForm(SendPasswordRecuperationCodeType::class);
        $form_send_recup_code->handleRequest($request);

        if ($form_send_recup_code->isSubmitted() && $form_send_recup_code->isValid()) {
            
            $response = $form_send_recup_code->getData();
            $res = $UtilisateurRepository->findByEmail($response['email']);
            $utilisateur = $res[0];

            if (isset($utilisateur) && !empty($utilisateur)){

                date("Y-m-d h:i:s");
                $now = new \DateTime();
                $date_limit = $now->modify('+1 day');
                
                function generateRandomString($length = 64) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, strlen($characters) - 1)];
                    }
                    return $randomString;
                }

                $codeRecup = generateRandomString();
                
                $utilisateur->setCodeRecup($codeRecup);
                $utilisateur->setRecupDate($date_limit);
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
            "form_send_recup_code" => $form_send_recup_code->createView(),
            'controller_name' => 'ForgetPasswordController',
        ]);
    }

    #[Route('/modifier-le-mot-de-passe/{code_recup}', name: 'app_edit_password')]
    public function editPassword(string $code_recup, UtilisateurRepository $utilisateurRepository, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager) : response
    {
        $array_utilisateur = new Utilisateur;
        $array_utilisateur = $utilisateurRepository->findByRecupcode($code_recup);

        if (isset($array_utilisateur) && !empty($array_utilisateur)) {

            $utilisateur = $array_utilisateur[0];
            $date_recup = $utilisateur->getRecupDate();
            $now = new \DateTime();
            
            if ($date_recup > $now)   {   
    
                $data;
    
                $form = $this->createForm(EditPsswFormType::class, null, [
                    'attr' => ['id' => 'password-edit-form', 'class'=>'mb-5 mt-5']]);
                // $form->setAttribute('id', 'password-edit-form');
                $form->handleRequest($request);
    
                if ($form->isSubmitted()){
    
                    $utilisateur->setPassword(
                        $userPasswordHasher->hashPassword(
                            $utilisateur,
                            $form->get('password')->getData()
                        )
                    );
    
                    $utilisateurRepository->save($utilisateur, true);
    
                    $utilisateur->setCodeRecup(null);
                    $utilisateur->setRecupDate(null);
                    $entityManager->persist($utilisateur);
                    $entityManager->flush();
    
                    header('Content-Type: application/json');
                    echo json_encode(["status" => true]);
                    die;
    
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
