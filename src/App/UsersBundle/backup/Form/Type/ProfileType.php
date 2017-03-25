<?php

namespace App\UsersBundle\Form\Type;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder Form builder
     * @param array                $options Options
     *
     * @return void
     */
    public function buildForm ( FormBuilderInterface $builder, array $options ) {
        $builder
            ->add('email', 'email', [
                'disabled' => true,
                'attr' => ['placeholder' => 'form.email'],
                'translation_domain' => 'FOSUserBundle'
            ])
            ->add('firstName', 'text')
            ->add('lastName', 'text');
    }

    /**
     * @param OptionsResolverInterface $resolver Resolver
     *
     * @return void
     */
    public function setDefaultOptions ( OptionsResolverInterface $resolver ) {
        $resolver->setDefaults([
            'data_class' => 'App\UsersBundle\Entity\User'
        ]);
    }

    /**
     * @return string
     */
    public function getName ( ) {
        return 'app_user_profile';
    }

}