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
// use Symfony\Component\Mime\Address;
// use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Mail\verificationUtilisateurMailer;
use DateTime;


class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, EntityManagerInterface $entityManager, MailerInterface $mailerInterface): Response
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

            $now = new \DateTime();
            $dateLimit = $now->modify('+1 day');

            $verificationCode = bin2hex(random_bytes(64));
            $verificationCode = substr($verificationCode, 0, 64);

            $user->setVerificationCode($verificationCode);
            $user->setVerificationDate($now);

            $entityManager->persist($user);
            $entityManager->flush();
            
            $mailer = new verificationUtilisateurMailer('emile00013@gmail.com', $mailerInterface);
            $mailer->sendVerificationLink($verificationCode, $user->getNomUtilisateur(), $form->get('email')->getData());

            return $this->render('registration/verification_email.html.twig',  
                [
                    'controller_name' => 'Vérification de l\' email',
                    'message' => '<b>Information :</b><br> Pour pouvoir vous authentifier, cliquez sur lien envoyé par email pour vérifier votre compte.',
                    'message_tyle' => 'warning'
                    
                ]);

        }

        return $this->render('registration/register.html.twig',
        [
            'controller_name' => 'Inscription',
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verifier-email/{code_verification}', name: 'app_verif_email')]
    public function verification(string $code_verification, UtilisateurRepository $utilisateurRepo, UserAuthenticatorInterface $userAuthenticator, Authenticator $authenticator, Request $request, MailerInterface $mailerInterface): response
    {
        $utilisateur = $utilisateurRepo->findByVerifcode($code_verification);

        if (isset($utilisateur)){

            $now = new \DateTime();

            if ($utilisateur->getVerificationDate() > $now) {

                $utilisateur->setVerificationCode(null);
                $utilisateur->setVerificationDate(null);
                $utilisateur->setVerfication(true);
                $utilisateurRepo->save($utilisateur, true);

                return $userAuthenticator->authenticateUser(
                    $utilisateur,
                    $authenticator,
                    $request
                );

            } else {

                $now = new \DateTime();
                $dateLimit = $now->modify('+1 day');

                $verificationCode = bin2hex(random_bytes(64));
                $verificationCode = substr($verificationCode, 0, 64);

                $utilisateur->setVerificationCode($verificationCode);
                $utilisateur->setVerificationDate($dateLimit);
                $utilisateur->setVerfication(false);
                $utilisateurRepo->save($utilisateur, true);

                $mailer = new verificationUtilisateurMailer('emile00013@gmail.com', $mailerInterface);
                $mailer->sendVerificationLink($verificationCode, $utilisateur->getNomUtilisateur(), $utilisateur->getEmail());

                return $this->render('registration/verification_email.html.twig',  
                [
                    'controller_name' => 'Vérification de l\' email',
                    'message' => '<b>Attention :</b><br> La date limite pour confirmer votre email a été dépassé. Un nouvelle eMail vous a été envoyé à votre addresse mail.',
                    'message_tyle' => 'warning'
                    
                ]);

            }
            

        } else {

            return $this->render('registration/verification_email.html.twig',  
                [
                    'controller_name' => 'Vérification de l\' email',
                    'message' => '<b>Echec :</b><br> Aucun utilisateur n\' a été trouvé par ce lien. Vérifiez que l\'url de vérification est conforme à celle que SnowTricks vous a envoyé.',
                    'message_tyle' => 'danger'
                    
                ]);

        }

    }
}
