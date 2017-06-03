<?php

namespace UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\{
    AbstractType, FormBuilderInterface
};
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use UserBundle\Entity\User;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'roles', ChoiceType::class, [
                    'choices' => User::getRoleOptions(),
                    'expanded' => true,
                    'multiple' => true,
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return RegistrationFormType::class;
    }
}