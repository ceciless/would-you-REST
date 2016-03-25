<?php

namespace Api\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Api\ApiBundle\Form\EventsType;
//use Api\ApiBundle\Form\TeamsType;

class MatchesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('homeTeamId')
            ->add('awayTeamId' )
            ->add('homeScore')
            ->add('awayScore')
            ->add('snitch')
            ->add('p')
            ->add('padj')
            ->add('SWIM')
            ->add('eventId')
            ->add('eventOrder')

             ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Api\ApiBundle\Entity\Matches'
        ));
    }
}
