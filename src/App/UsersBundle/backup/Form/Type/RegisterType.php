<?php

namespace App\UsersBundle\Form\Type;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder Form builder
     * @param array                $options Options
     *
     * @return void
     */
    public function buildForm ( FormBuilderInterface $builder, array $options ) {
        $builder->add('email', 'email', [
                'attr' => ['placeholder' => 'form.email'],
                'translation_domain' => 'FOSUserBundle'
            ])
            ->add('plainPassword', 'repeated', [
                'type' => 'password',
                'options' => [
                    'translation_domain' => 'FOSUserBundle'
                ],
                'first_options' => ['attr' => ['placeholder' => 'form.password']],
                'second_options' => ['attr' => ['placeholder' => 'form.password_confirmation']],
                'invalid_message' => 'fos_user.password.mismatch',
            ])
            ->add('cgu', 'checkbox', array(
                'label'     => 'register.terms',
                'translation_domain' => 'messages',
                'required'  => true,
                'mapped' => false
            ));
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
        return 'app_user_register';
    }

}