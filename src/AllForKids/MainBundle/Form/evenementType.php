<?php

namespace AllForKids\MainBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class evenementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('file')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('description')
            ->add('ticketDisponible')
            ->add('tarif')
         ->add('lieu')
            ->add('categorie',EntityType::class,
                array('class'=>'AllForKids\MainBundle\Entity\Categorie',
                    'choice_label'=>'nomCategorie',
                    'multiple'=>false))


          // ->add('Categorie', ChoiceType::class, array(
           // 'choices' => array('pour se cultiver' => 'Evenement culturel', 'pour se distraire' => 'evenement de distraction', 'pour les bébés' => 'evenement pour les Bebes'), ))



            ->add('Ajouter',SubmitType::class);


        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AllForKids\MainBundle\Entity\evenement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'allforkids_mainbundle_evenement';
    }


}
