<?php

namespace App\Form;

use App\Entity\Figure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File as ConstrainFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CreationFigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {  
    
        $figure = $options["data"];
        
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom : ',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('article', TextareaType::class, [
                'label' => 'Article : ',
                'attr' => [
                    'class' => 'form-control'
                ]
                ]);
            if ($figure->getId() !== null) {

                $builder->add('imageUrl', FileType::class, [
                    'label' => 'Image : ',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control'
                    ],
                    'constraints' => [
                        new ConstrainFile([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/jpeg'
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image file',
                        ])
                    ]
                ]);
            } else {
                $builder->add('imageUrl', FileType::class, [
                    'label' => 'Image : ',
                    'attr' => [
                        'class' => 'form-control'
                    ],
                    'constraints' => [
                        new ConstrainFile([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/jpeg'
                            ],
                            'mimeTypesMessage' => 'Please upload a valid image file',
                        ])
                    ]
                ]);
            }
           
            $builder->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Figure::class,
        ]);
    }
}
