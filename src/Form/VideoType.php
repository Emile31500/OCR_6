<?php

namespace App\Form;

use App\Entity\Figure;
use App\Entity\VideoFigure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('urlVideo', TextType::class, [
                'label' => 'Lien de la vidéo : ',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'https://www.youtube.com/watch?v=..',
                    'class' => 'form-control video-figure-url'
                ]]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
    }
}
