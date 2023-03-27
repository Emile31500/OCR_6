<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use App\Form\RegistrationFormType;
use App\Security\Authenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $verificationCode = uniqid();
            $user->setVerificationCode($verificationCode);

            $entityManager->persist($user);
            $entityManager->flush();
            

            $email = (new TemplatedEmail())
                ->from(new Address('emile00013@gmail.com'))
                ->to(new Address($form->get('email')->getData()))    
                ->subject('Vérification de l\'email')
                ->htmlTemplate('mail/verified_email.html.twig')
                ->context([
                        'name' => $user->getNomUtilisateur(),
                        'code_verification' => $verificationCode
                ]);
            $mailer->send($email);

            return $this->render('registration/verification_email.html.twig',  
                [
                    'controller_name' => 'Vérification de l\' email',
                    'message' => '<b>Information :</b><br> Pour pouvoir vous authentifier, cliquez sur lien envoyé par email pour vérifier votre compte.',
                    'message_tyle' => 'warning'
                    
                ]);
            die;

        }

        return $this->render('registration/register.html.twig',
        [
            'controller_name' => 'Inscription',
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verifier-email/{code_verification}', name: 'app_verif_email')]
    public function verification(string $code_verification, UtilisateurRepository $utilisateurRepo, UserAuthenticatorInterface $userAuthenticator, Authenticator $authenticator, Request $request): response
    {
        if ($utilisateur = $utilisateurRepo->findByVerifcode($code_verification)){

            if(isset($utilisateur)){

                $utilisateur->setVerificationCode(null);
                $utilisateur->setIsVerified(true);
                $utilisateurRepo->save($utilisateur, true);
    
                return $userAuthenticator->authenticateUser(
                    $utilisateur,
                    $authenticator,
                    $request
                );
    
            }

        } else {

            return $this->render('registration/verification_email.html.twig',  
                [
                    'controller_name' => 'Vérification de l\' email',
                    'message' => '<b>Attention :</b><br> Aucun utilisateur n\' a été trouvé par ce lien. Vérifiez que l\'url de vérification est conforme à celle que SnowTricks vous a envoyé.',
                    'message_tyle' => 'danger'
                    
                ]);

        }

    }
}
