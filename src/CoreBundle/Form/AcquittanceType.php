<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcquittanceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomLocataire')
            ->add('adresseLocataire')
            ->add('nomProprietaire')
            ->add('adresseProprietaire')
            ->add('adresseBien')
            ->add('debutPeriode')
            ->add('finPeriode')
            ->add('montantLoyer')
            ->add('montantLoyerLettre')
            ->add('montantHorsCharge')
            ->add('montantCharges')
            ->add('total')
            ->add('datePaiement')
            ->add('modePaiement')
            ->add('villeEdition')
            ->add('dateCreation')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CoreBundle\Entity\Acquittance'
        ));
    }
}
