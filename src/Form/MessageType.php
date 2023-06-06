<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('message', TextareaType::class, [
                'label' => false,
                "attr" => [
                    'class' => 'form-control lead right-message bg-light bg-gradien'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => ' Envoyer ',
                "attr" => [
                    'class' => 'btn btn-primary position-relative start-50'
                ]
            ])
            ->setAttributes(array(
                'id' => 'my-form-id',
                'class' => 'my-form-class'
            ));
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
