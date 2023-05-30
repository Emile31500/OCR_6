<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditPsswFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password', PasswordType::class, [
                    "label" => "Mot de passe : ",
                    "attr" => [
                        'class' => 'form-control'
                ]])
            ->add('passwordConf', PasswordType::class, [
                    "label" => "Confirmer : ",
                    "attr" => [
                        'class' => 'form-control'
                ]])
            ->add('submit', SubmitType::class, [
                    "attr" => [
                        'class' => 'form-control btn btn-primary'
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
