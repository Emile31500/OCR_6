<?php

namespace App\Mail;

use App\Entity\Utilisateur;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


Class verificationUtilisateurMailer {

    private $from;

    public function __Construct(string $from, MailerInterface $mailerInterface) {

        $this->from = $from;
        $this->mailerInterface = $mailerInterface;

    }

    public function sendVerificationLink(string $verificationCode, string $nomUtilisateur, string $to): void
    {
        $email = (new TemplatedEmail())
        ->from(new Address($this->from))
        ->to(new Address($to))   
        ->subject('Vérification de l\'email')
        ->htmlTemplate('mail/verified_email.html.twig')
        ->context([
                'name' => $nomUtilisateur,
                'code_verification' => $verificationCode
        ]);

        $this->mailerInterface->send($email);

    }

}


