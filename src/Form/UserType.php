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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        // Existing fields for Step 1: JE SUIS
            $builder
               
            // ->add('email', EmailType::class)
            
            // ->add('password', RepeatedType::class,[
            //     'first_name' => 'password',
            //     'second_name' => 'confirm',
            //     'type' => PasswordType::class,
            //     ])
               
            ->add('username', TextType::class,[
                'label' => 'Je m\'appelle ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('postalCode', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez un code postal',
                ],
            ])
            // ->add('birthdate', BirthdayType::class, [
            //     'widget' => 'single_text',
            //     'attr' => [
            //         'class' => 'form-control'
            //     ],
            //     'format' => 'yyyy-MM-dd',
            // ])

            ->add('age', IntegerType::class, [
                'mapped' => false,
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
                    'H' => 'H',
                    'F' => 'F',
                    'Non-binaire' => 'Non-binaire'
                ],
                'multiple' => false,
                'expanded' => true
            ])

            ->add('language', ChoiceType::class, [
                'label' => 'Je parle ....',
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
                'attr' => [
                    'class' => 'form-control',
                ],
                'multiple' => true,
                'expanded' => true,
            ])

            ->add('image', TextType::class, [
                'label' => 'Mon image',
                'attr' => [
                    'placeholder' => 'image = link url',
                ],
            ])

            ->add('job', TextType::class,[
                'label' => 'Je boss dans ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('description', TextareaType::class,[
                'label' => 'Je me décris en quelque mot ...',
                'attr' => [
                    'class' => 'form-control',
                    'rows'=> 5
                ]
            ])


            ->add('diet', ChoiceType::class, [
                'label' => 'Mon régime alimentaire ...',
                
                'choices'  => [
                    'Végan(ne)' => 'Végan(ne)',
                    'Curieu(x/se)' => 'Curieu(x/se)',
                    'Végétarien(ne)' => 'Végétarien(ne)',
                    'Fléxitarien(ne)' => 'Fléxitarien(ne)'
                ],
                'choice_attr' => [
                    'Végan(ne)' => ['class' => 'preferences demo2 demoyes margin-radio'],
                    'Curieu(x/se)' => ['class' => 'preferences demo2 demoyes margin-radio'],
                    'Végétarien(ne)' => ['class' => 'preferences demo2 demoyes margin-radio'],
                    'Fléxitarien(ne)' => ['class' => 'preferences demo2 demoyes margin-radio'],
                ],
                'multiple' => false,
                'expanded' => true
            ])
       
         // New fields for Step 2: J'AIME
        ->add('centerOfInterest',  ChoiceType::class, [
            'label' => 'Mes centres d\'interets ...',
            'attr' => [
                'class' => 'btn btn-outline-primary jaimechoice mb-4 col-3'
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
                'Animaux' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Environnement' => ['class' => 'btn-check  ','id' =>'btn-check-outlined-4 '],
                'Jeux vidéos' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Art et Culture' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Sport' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Voyage' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Musique' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Danse' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Sciences' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Bien-etre' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Food' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],
                'Activités sociales' => ['class' => 'btn-check ','id' =>'btn-check-outlined-4 '],           
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

