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
                'label' => 'mot de passe',
                'first_name' => 'password',
                'second_name' => 'confirm',
                'attr' => [
                    'placeholder' => 'Mot de passe',
                ],
                'type' => PasswordType::class,
                ])

        ->add('terms', CheckboxType::class, [
            'label' => 'J\'ai lu et j\'accepte les conditions générales',
            'property_path' => 'termsAccepted'])

                   ->add('submit', SubmitType::class, [
                    'label' => 'S\'enregistrer'
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 