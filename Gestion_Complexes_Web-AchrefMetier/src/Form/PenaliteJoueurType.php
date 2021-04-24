<?php

namespace App\Form;

use App\Entity\PenaliteJoueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PenaliteJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heure')
            ->add('arbitre')
            ->add('joueur')
            ->add('matche')
            ->add('penalite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PenaliteJoueur::class,
        ]);
    }
}
