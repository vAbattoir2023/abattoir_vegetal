<?php

namespace App\Form;

use App\Document\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Regex;


class ApiUserType extends AbstractType
{
    const REGEX_DEPARTEMENT_CODE = '/^(?:0[1-9]|[1-8]\d|9[0-8])\d{3}$/';

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('language', ChoiceType::class, [
            'choices' => [
                'English' => 'GB',
                'French' => 'FR',
            ],
            'choice_attr' => [
                'English' => ['class' => 'langue'],
                'French' => ['class' => 'langue'],
            ],
            'multiple' => true, 
            'expanded' => true,
        ]) 
        ->add('job', TextType::class)
        
        ->add('postalCode', TextType::class, [
            'attr' => [
                'placeholder' => 'Zip Code',
            ],
            'constraints' => [
                new Length(['min' => 5, 'max' => 5, 'exactMessage' => 'Le code postal doit comporter 5 chiffres.']),
                new Regex([
                    'pattern' => self::REGEX_DEPARTEMENT_CODE,
                    'message' => 'Le code postal n\'est pas valide.',
                ]),
            ],
        ])

        ->add('password', PasswordType::class,[
            'attr' => [
                'placeholder' => 'Password',
            ]
            ])

        ->add('diet', ChoiceType::class, [
            'choices'  => [
                'vegan' => 'vegan',
                'curious' => 'curious',
                'vegetarian' => 'vegetarian',
                'flexitarian' => 'flexitarian'
            ],
            'choice_attr' => [
                'vegan' => ['class' => 'regime'],
                'curious' => ['class' => 'regime'],
                'vegetarian' => ['class' => 'regime'],
                'flexitarian' => ['class' => 'regime'],
            ],
            'multiple' => false,
            'expanded' => true
        ])
          
        ->add('description', TextType::class)

        ->add('centerOfInterest',  ChoiceType::class, [
            'choices'  => [
                'Animals' => 'Animaux',
                'Environment' => 'Environnement',
                'Games' => 'Jeux vidéos',
                'Art & Cult' => 'Art et Culture',
                'Sports' => 'Sport',
                'Travel' => 'Voyage',
                'Music' => 'Musique',
                'Dance' => 'Danse',
                'Sciences' => 'Sciences',
                'Bien-etre' => 'Bien-etre',
                'Food' => 'Food',
                'Social Act' => 'Activités sociales'
            ],
            'choice_attr' => [
                'Animaux' => ['class' => 'regime'],
                'Environnement' => ['class' => 'regime'],
                'Jeux vidéos' => ['class' => 'regime'],
                'Art et Culture' => ['class' => 'regime'],
                'Sport' => ['class' => 'regime'],
                'Voyage' => ['class' => 'regime'],
                'Musique' => ['class' => 'regime'],
                'Danse' => ['class' => 'regime'],
                'Sciences' => ['class' => 'regime'],
                'Bien-etre' => ['class' => 'regime'],
                'Food' => ['class' => 'regime'],
                'Activités sociales' => ['class' => 'regime'],           
             ],
            'multiple' => true,
            'expanded' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}