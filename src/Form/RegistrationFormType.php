<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                    "label" => "Prénom : ",
                    "attr" => [
                        'class' => 'form-control'
                    ]
                ])

            ->add('nom', TextType::class, [
                    "label" => "Nom : ",
                    "attr" => [
                        'class' => 'form-control'
                    ]
                ])

            ->add('date_de_naissance', DateType::Class, [
                    "label" => "Date de naissance : ",
                    'widget' => 'single_text',
                    'years' => range(1920, date('Y')),
                    "attr" => [
                        'class' => 'form-control'
                    ]
            ])

            ->add('nom_utilisateur', TextType::class, [
                    "label" => "Nom d'utilisateur : ",
                    "attr" => [
                        'class' => 'form-control'
                    ]
                ])

            ->add('email', EmailType::class, [
                    "label" => "E-mail : ",
                    "attr" => [
                        'class' => 'form-control'
                    ]
                ])

            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe : ',
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'J\' accepte les conditions d\'utilisation ',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez acceptez nos conditions d\'utilisation pour pouvoir vous inscrire.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
