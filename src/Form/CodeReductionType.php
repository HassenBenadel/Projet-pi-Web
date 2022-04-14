<?php

namespace App\Form;

use App\Entity\CodeReduction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CodeReductionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
      
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CodeReduction::class,
        ]);
    }
}
