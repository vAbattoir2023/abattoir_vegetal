<?php 

namespace App\Form;

use App\Document\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
                    'placeholder' => 'Code postal',
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
                    'H' => 'Homme',
                    'F' => 'Femme',
                    'Non-binaire' => 'Non-binaire'
                ],
                'choice_attr' => [
                    'H' => ['class' => 'form-check-input'],
                    'F' => ['class' => 'form-check-input'],
                    'Non-binaire' => ['class' => 'form-check-input'],
                ],
                'multiple' => false,
                'expanded' => true
            ])

            ->add('language', ChoiceType::class, [
                'choices' => [
                    'Anglais' => 'GB',
                    'Français' => 'FR',
                    'Espagnol' => 'ES',
                    'Italien' => 'IT',
                    'Néerlandais' => 'NL',
                    'Bresilien' => 'BR',
                    'Chinois ' => 'CN',
                    'Algerien ' => 'DZ',
                ],
                'choice_attr' => [
                    'Anglais' => ['class' => 'langue'],
                    'Français' => ['class' => 'langue'],
                    'Espagnol' => ['class' => 'langue'],
                    'Italien' => ['class' => 'langue'],
                    'Néerlandais' => ['class' => 'langue'],
                    'Bresilien' => ['class' => 'langue'],
                    'Chinois ' => ['class' => 'langue'],
                    'Algerien ' => ['class' => 'langue'],
                ],
                'multiple' => true,
                'expanded' => true,
            ])

            ->add('image', TextType::class, [
                'attr' => [
                    'placeholder' => 'https://',
                ],
            ])

            ->add('job', TextType::class)

            ->add('description', TextType::class,)

            ->add('diet', ChoiceType::class, [
                
                'choices'  => [
                    'Végan(ne)' => 'Végan(ne)',
                    'Curieu(x/se)' => 'Curieu(x/se)',
                    'Végétarien(ne)' => 'Végétarien(ne)',
                    'Fléxitarien(ne)' => 'Fléxitarien(ne)'
                ],
                'choice_attr' => [
                    'Végan(ne)' => ['class' => 'regime'],
                    'Curieu(x/se)' => ['class' => 'regime'],
                    'Végétarien(ne)' => ['class' => 'regime'],
                    'Fléxitarien(ne)' => ['class' => 'regime'],
                ],
                'multiple' => false,
                'expanded' => true
            ])
       
         // New fields for Step 2: J'AIME
        ->add('centerOfInterest',  ChoiceType::class, [
            'label' => 'Mes centres d\'interets ...',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices'  => [
                
                //
                'Animaux' => 'Animaux',
                'Environnement' => 'Environnement',
                'Jeux vidéos' => 'Jeux vidéos',
                'Art et Culture' => 'Art et Culture',
                'Sport' => 'Sport',
                'Voyage' => 'Voyage',
                'Musique' => 'Musique',
                'Danse' => 'Danse',
                'Sciences' => 'Sciences',
                'Bien-etre' => 'Bien-etre',
                'Food' => 'Food',
                'Activités sociales' => 'Activités sociales'
            ],
            'choice_attr' => [
                'Animaux' => ['class' => 'btn btn-outline-danger'],
                'Environnement' => ['class' => 'btn btn-outline-danger'],
                'Jeux vidéos' => ['class' => 'btn btn-outline-danger'],
                'Art et Culture' => ['class' => 'btn btn-outline-danger'],
                'Sport' => ['class' => 'btn btn-outline-danger'],
                'Voyage' => ['class' => 'btn btn-outline-danger'],
                'Musique' => ['class' => 'btn btn-outline-danger'],
                'Danse' => ['class' => 'btn btn-outline-danger'],
                'Sciences' => ['class' => 'btn btn-outline-danger'],
                'Bien-etre' => ['class' => 'btn btn-outline-danger'],
                'Food' => ['class' => 'btn btn-outline-danger'],
                'Activités sociales' => ['class' => 'btn btn-outline-danger'],           
             ],
            'multiple' => true,
            'expanded' => true
        ])

        ->add('centerOfInterestPerso', TextType::class, [
            'label' => 'J\'en ai d\'autres ...',
            'attr' => [
                'class' => 'form-control',
            ]
        ])
        ->add('submit', SubmitType::class);

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 

