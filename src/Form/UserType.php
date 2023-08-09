<?php 

namespace App\Form;

use App\Document\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        // Existing fields for Step 1: JE SUIS
            $builder
               
            ->add('username', TextType::class)

            ->add('postalCode', TextType::class, [
                'attr' => [
                    'placeholder' => 'Zip Code',
                ],
            ])

            // ->add('birthdate', BirthdayType::class, [
            //     'widget' => 'single_text',
            //     'attr' => [
            //         'class' => 'form-control'
            //     ],
            //     'format' => 'yyyy-MM-dd',
            // ])

            ->add('age', IntegerType::class)


            ->add('gender', ChoiceType::class, [
                'choices'  => [
                    'Men' => 'Men',
                    'Woman' => 'Woman',
                    'Other' => 'Other'
                ],
                'choice_attr' => [
                    'Men' => ['class' => 'form-check-input'],
                    'Woman' => ['class' => 'form-check-input'],
                    'Other' => ['class' => 'form-check-input'],
                ],
                'multiple' => false,
                'expanded' => true
            ])

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

            // ->add('image', TextType::class, [
            //     'attr' => [
            //         'placeholder' => 'https://',
            //     ],
            // ])
            ->add('image', TextType::class, [
                'label'=> 'add a picture',
            ])

            
            ->add('job', TextType::class)

            ->add('description', TextType::class,)

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
       
         // New fields for Step 2: J'AIME
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
        ])

        ->add('centerOfInterestPerso', TextType::class)
        ->add('submit', SubmitType::class);

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 

