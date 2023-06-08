<?php

namespace App\Form;

use App\Form\CreationFigureType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File as ConstrainFile;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('image', FileType::class,  [
            'label' => 'Image : ',
            'data_class' => null,
            'multiple' => true,
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

    

}
