<?php

namespace App\Form;

use App\Entity\Figure;
use App\Form\PhotoFigureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Validator\Constraints\File as ConstrainFile;


class CreationFigureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {  
    
        // $figure = $options["data"];

        // if ($figure->getId() !== null) {

        //     $filesAreRequired = false;

        // } else {

        //     $filesAreRequired = true;

        // }
        $filesAreRequired = false;

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
            ])
            ->add('image', FileType::class, [
                'label' => 'Article : ',
                'multiple' => true,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ]);

    }


    // public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Figure::class,
    //     ]);
    // }
}
