<?php

namespace App\Form;

use App\Entity\SystemeSurveillance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SystemeSurveillanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('limite_critique')
            ->add('enregistrement')
            ->add('action_corrective')
            ->add('frequence_controle')
            ->add('responsable')
            ->add('verification')
            ->add('resultat')
            ->add('typeprobleme')
            ->add('criteresurveille')
            ->add('etape')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SystemeSurveillance::class,
        ]);
    }
}
