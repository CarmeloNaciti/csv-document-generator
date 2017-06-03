<?php

namespace FileBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class UploadFileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'file',
            FileType::class,
            [
                'label' => 'Please selectUpload File:',
            ]
        );

        $builder->add(
            'submit',
            SubmitType::class,
            [
                'label' => 'Submit File',
            ]
        );
    }
}