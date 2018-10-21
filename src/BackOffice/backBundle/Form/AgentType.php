<?php

namespace BackOffice\backBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
  public function buildForm(FormBuilderInterface $builder, array $options)
 {
 $transformer = new StringToArrayTransformer();
 $builder
 ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core
\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
 ->add('username', null, array('label' => 'form.username', 'translation_domain'
=> 'FOSUserBundle'))
 ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extens
ion\Core\Type\RepeatedType'), array(
 'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\
Type\PasswordType'),
 'options' => array('translation_domain' => 'FOSUserBundle'),
 'first_options' => array('label' => 'form.password'),
 'second_options' => array('label' => 'form.password_confirmation'),
 'invalid_message' => 'fos_user.password.mismatch',
 ))
 ->add('nom')
 ->add('prenom')
 ->add($builder->create('roles', 'choice', array(
 'label' => 'Rôle:',
 'mapped' => true,
 'expanded' => true,
 'multiple' => false,
 'choices' => array(
 'ROLE_AGENT' => 'Agent',
'ROLE_CLIENT' => 'Client',
 )
 ))->addModelTransformer($transformer))
 ;
    /**
     * @param OptionsResolverInterface $resolver
     */
}

    public function getName() {
        
    }

}