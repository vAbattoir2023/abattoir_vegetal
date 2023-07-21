<?php 

namespace App\Form;

use App\Document\User;
// use Doctrine\ODM\MongoDB\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeTpe;
use Symfony\Component\Form\Extension\Core\Type\DateType ;
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
                'label' => 'Je m\'appelle ...'])

            ->add('city', TextType::class,[
                'label' => 'J\'habite ...',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            

            // ->add('dateOfBirth', DateType::class, [
            //     'label' => 'Je suis né(e) le ...',
            //     'widget' => 'single_text',
            //     // this is actually the default format for single_text
            //     'format' => 'yyyy-MM-dd',
            // ])

            ->add('age', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('gender', ChoiceType::class, [
                'label' => 'Je suis ...',
                'choices'  => [
                    'H' => 'Homme ',
                    'F' => 'Femme ',
                    'Non-binaire' => 'Non-binaire '
                ],
                'choice_attr'  => [
                    'H' => ['style' => 'margin:0px 5px;'],
                    'F' => ['style' => 'margin:0px 5px;'],
                    'Non-binaire' => ['style' => 'margin:0px 5px;'],
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
                    'class' => 'form-control'
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
                'Végan(ne)' => ['class' => 'preferences demo2 demoyes' ],
                'Curieu(x/se)' => ['class' => 'preferences demo2 demoyes mx-3'],
                'Végétarien(ne)' => ['class' => 'preferences demo2 demoyes'],
                'Fléxitarien(ne)' => ['class' => 'preferences demo2 demoyes']
         ],
                'multiple' => false,
                'expanded' => true
            ])
       
         // New fields for Step 2: J'AIME
        ->add('centerOfInterest',  ChoiceType::class, [
            'label' => 'Mes centres d\'interets ...',
           
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
                'Animaux' => ['class' => 'preferences demo2 demoyes'],
                'Environnement' => ['class' => 'preferences demo2 demoyes'],
                'Jeux vidéos' => ['class' => 'preferences demo2 demoyes'],
                'Art et Culture' => ['class' => 'preferences demo2 demoyes'],
                'Sport' => ['class' => 'preferences demo2 demoyes'],
                'Voyage' => ['class' => 'preferences demo2 demoyes'],
                'Musique' => ['class' => 'preferences demo2 demoyes'],
                'Danse' => ['class' => 'preferences demo2 demoyes'],
                'Sciences' => ['class' => 'preferences demo2 demoyes'],
                'Bien-etre' => ['class' => 'preferences demo2 demoyes'],
                'Food' => ['class' => 'preferences demo2 demoyes'],
                'Activités sociales' => ['class' => 'preferences demo2 demoyes'],           
             ],
            'multiple' => true,
            'expanded' => true
        ])

        ->add('centerOfInterestPerso', TextType::class, [
            'label' => 'J\'en ai d\'autres ...',
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

