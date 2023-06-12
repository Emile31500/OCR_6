<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Mime\Email;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SendPasswordRecuperationCodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $form, array $options): void
    {
        $form
            ->add('email', EmailType::class, [
                "label" => "E-mail : ",
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add('submit', SubmitType::class, [
                "label" => "Envoyer",
                "attr" => [
                    "class" => "btn btn-primary"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
