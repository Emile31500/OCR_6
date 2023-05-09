<?php

namespace App\Mail;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


Class verificationUtilisateurMailer {

    public  const FROM = 'email00013@gmail.com';

    public function __Construct(MailerInterface $mailerInterface, UtilisateurRepository $utilisateurRepo) {

        $this->from = self::FROM;
        $this->mailerInterface = $mailerInterface;
        $this->utilisateurRepo = $utilisateurRepo;

    }

    public function sendVerificationLink(Utilisateur $user): void
    {
        $now = new \DateTime();
        $dateLimit = $now->modify('+1 day');
        
        $verificationCode = bin2hex(random_bytes(64));
        $verificationCode = substr($verificationCode, 0, 64);

        $user->setVerificationCode($verificationCode);
        $user->setVerificationDate($dateLimit);
        $user->setVerfication(false);
        $this->utilisateurRepo->save($user, true);

        $email = (new TemplatedEmail())
        ->from(new Address($this->from))
        ->to(new Address($user->getEmail()))   
        ->subject('Vérification de l\'email')
        ->htmlTemplate('mail/verified_email.html.twig')
        ->context([
                'name' => $user->getNomUtilisateur(),
                'code_verification' => $verificationCode
        ]);

        $this->mailerInterface->send($email);

    }

}


