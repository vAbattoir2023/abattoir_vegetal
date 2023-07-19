<?php

namespace App\Form;

use App\Document\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ApiUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('job', TextType::class, [
                'attr' => ['class' => 'form-control',
                        'placeholder' => 'Entre une profession'],
            ])
            ->add('city', TextType::class, [
                'attr' => ['class' => 'form-control',
                        'placeholder' => 'Entre une ville'],
            ])
            ->add('diet', ChoiceType::class, [
                'label' => 'Diet',
                'attr' => [
                    'class' => 'form-control',
                ],
                'choices' => [
                    'Végan(ne)' => 'Végan(ne)',
                    'Curieu(x/se)' => 'Curieu(x/se)',
                    'Végétarien(ne)' => 'Végétarien(ne)',
                    'Fléxitarien(ne)' => 'Fléxitarien(ne)',
                ],
            ])
            // ->add('allergy', TextType::class, [
            //     'attr' => ['class' => 'form-control',
            //             'placeholder' => 'Entre une allergie'],
            // ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control',
                        'placeholder' => 'Entre une description'],
            ])
                
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
