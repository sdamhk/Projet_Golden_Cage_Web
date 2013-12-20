<?php

namespace MyApp\ProjetFinalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin')
            ->add('nom')
            ->add('prenom')
            ->add('gouvernorat')
            ->add('delegation')
            ->add('tel')
            ->add('adresse')
            ->add('password')
            ->add('email')
            ->add('login')
            ->add('dateNaissance')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\ProjetFinalBundle\Entity\client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'myapp_projetfinalbundle_client';
    }
}
