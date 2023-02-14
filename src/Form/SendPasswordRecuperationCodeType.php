<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
