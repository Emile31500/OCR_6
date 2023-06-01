<?php

namespace App\Form;

use App\Entity\Figure;
use App\Form\VideoType;
use App\Form\PhotoFigureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
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
        
        $filesAreRequired = true;

        if (isset($options["data"])) {

            $figure = $options["data"];
            $filesAreRequired = false;

        }

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
                'label' => 'Images : ',
                'required' => $filesAreRequired,
                'multiple' => true,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('videoFigures', CollectionType::class, [
                'entry_type' => VideoType::class,
                //'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true
            ])
            ->add('submit', SubmitType::class, [
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
