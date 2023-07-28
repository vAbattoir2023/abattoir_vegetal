<?php 

namespace App\Form;

use App\Document\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Votre adresse mail',
                ],
            ])

            ->add('password', RepeatedType::class,[
            
             
                'first_name' => 'Password',
                'second_name' => 'Confirm',

                'first_options'  => ['attr' => 
                    [
                        'class' => 'bouton-small-transparent size-connexion mt-2',
                        'placeholder' => 'Mot de passe',
                    ],

                    'label' => false,
                ],
                'second_options' => ['attr' => 
                    [
                        'class' => 'bouton-small-transparent size-connexion mt-2',
                        'placeholder' => 'Confirmez votre mot de passe',
                    ],
                    'label' => false,
                ],
                'attr' => [
                    'placeholder' => 'Mot de passe',
                ],
                'type' => PasswordType::class,
            ])

        ->add('terms', CheckboxType::class, [
            'label' => 'J\'ai lu et j\'accepte les conditions générales',
            'property_path' => 'termsAccepted'])

                   ->add('submit', SubmitType::class, [
                    'label' => 'S\'inscrire'                    ,
                      'attr' => ['class' => 'bouton-small-transparent size-bouton mt-4'],
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 