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

class ApiUserType extends AbstractType
{
    // j'initie la faonction
            
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        
        // Existing fields for Step 1: JE SUIS
            $builder
            
            ->add('username', TextType::class,[
                'label' => 'Je m\'appelle ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('city', TextType::class,[
                'label' => 'J\'habite ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            // ->add('birthdate', BirthdayType::class, [
            //     'widget' => 'single_text',
            //     'attr' => [
            //         'class' => 'form-control'
            //     ],
            //     'format' => 'yyyy-MM-dd',
            // ])

            ->add('age', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('gender', ChoiceType::class, [
                'label' => 'Je suis ...',
                'attr' => [
                    'class' => 'form-control'
                ],
                'choices'  => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Non-binaire' => 'Non-binaire'
                ]
            ])

            ->add('language', TextType::class,[
                'label' => 'Je parle ...',
                'attr' => [
                    'class' => 'form-control',
                    'style' => "background-color:red"
                ]
            ])


            ->add('image', FileType::class, [
                'label' => 'Mon image',
                'attr' => [
                    'class' => 'form-control'
                ],
            ])

            ->add('job', TextType::class,[
                'label' => 'Je boss dans ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('description', TextType::class,[
                'label' => 'Je me décris en quelque mot ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])


            ->add('diet', ChoiceType::class, [
                'label' => 'Mon régime alimentaire ...',
                'attr' => [
                    'class' => 'form-control'
                ],
                'choices'  => [
                    'Végan(ne)' => 'Végan(ne)',
                    'Curieu(x/se)' => 'Curieu(x/se)',
                    'Végétarien(ne)' => 'Végétarien(ne)',
                    'Fléxitarien(ne)' => 'Fléxitarien(ne)'
                ]

            ])
       
         // New fields for Step 2: J'AIME
        ->add('centerOfInterest',  ChoiceType::class, [
            'label' => 'Mes centres d\'interets ...',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices'  => [
                'Animaux' => 'Animaux',
                'Environnement' => 'Environnement',
                'Art et Culture' => 'Art et Culture',
                'Musique' => 'Musique'
            ],
            'multiple' => true,
            'expanded' => true
        ])

        ->add('centerOfInterestPerso', TextType::class, [
            'label' => 'J\'en est d\'autres ...',
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

