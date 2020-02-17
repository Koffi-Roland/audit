<?php

namespace App\Form;

use App\Entity\IdentificationccpDanger;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdentificationccpDangerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description_danger')
            ->add('cause_danger')
            ->add('mesure_preventive')
            ->add('frequence')
            ->add('gravite')
            ->add('detection')
            ->add('risque')
            ->add('ccp')
            ->add('parametreMaitriser')
            ->add('Etape')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => IdentificationccpDanger::class,
        ]);
    }
}
