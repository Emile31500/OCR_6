<?php

namespace App\Security;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Mail\verificationUtilisateurMailer;
use Symfony\Component\Mailer\MailerInterface;
use DateTime;

class UserChecker implements UserCheckerInterface
{
    
    public function __Construct(MailerInterface $mailerInterface, UtilisateurRepository $utilisateurRepo)
    {
        $this->mailerInterface = $mailerInterface;
        $this->utilisateurRepo = $utilisateurRepo;
    }

    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Utilisateur) {
            return;
        }

        if ($user->isVerified() === false) {

            $mailer = new verificationUtilisateurMailer($this->mailerInterface, $this->utilisateurRepo);
            $mailer->sendVerificationLink($user);

            throw new CustomUserMessageAccountStatusException('Votre compte n\'est pas vérifié. Un email vous a été envoyé pour activer votre compte');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        return;
    }
}