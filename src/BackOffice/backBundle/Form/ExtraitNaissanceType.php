<?php

namespace BackOffice\backBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExtraitNaissanceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nompere')
            ->add('nommere')
            ->add('adresseNaissance')
            ->add('sex')
            ->add('dateNaissance')
            ->add('nationalite')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOffice\backBundle\Entity\Extraitnaissances'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backoffice_backbundle_extraitnaissance';
    }
}
