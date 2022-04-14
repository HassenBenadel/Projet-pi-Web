<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignUpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'Entrez Votre Nom'
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'placeholder' => 'Entrez Votre Prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'exemple@exemple.com'
                ]
            ])
            ->add('telephone', TelType::class, [
                'attr' => [

                    'placeholder' => '+216 99 999 999'
                ]
            ])
            ->add('image', FileType::class)
            ->add('pays', CountryType::class, [
                'attr' => [
                    'placeholder' => 'Choix du pays'
                ]
            ])
            ->add('ville', TextType::class, [
                'attr' => [
                    'placeholder' => 'Choix de ville'
                ]
            ])
            ->add('password', PasswordType::class, [
                'attr' => [

                    'placeholder' => '************'
                ]
            ])
            ->add('typecompte', ChoiceType::class, [
                'attr' => [
                    'placeholder' => 'choix de type de compte'
                ],
                'choices' => [
                    'Client' => 'Client',
                    'Fournisseur' => 'Fournisseur',
                    'Livreur' => 'Livreur',
                ]
            ])
            ->add('Inscription', SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-success',
                    'style' => 'width: 200px'
                ]
            ])
            ->add('Annuler', ResetType::class,[
                'attr' => [
                    'class' => 'btn btn-danger',
                    'style' => 'width: 200px'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
