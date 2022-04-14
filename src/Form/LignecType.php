<?php

namespace App\Form;

use App\Entity\Lignec;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LignecType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
   
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lignec::class,
        ]);
    }
}
