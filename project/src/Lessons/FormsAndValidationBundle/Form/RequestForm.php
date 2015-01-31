<?php

namespace Lessons\FormsAndValidationBundle;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RequestContactForm extends AbstractType
{

    private $options;

    public function __construct($options=array())
    {
        $this->options = $options;

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', ['label' => '', 'trim' => true, 'required' => true ])
            ->add('gender', 'textarea', ['label' => '', 'trim' => true, 'required' => true ])
            ->add('email', 'email', ['label' => '', 'trim' => true, 'required' => true ])
            ->add('message', 'textarea', ['label' => '', 'trim' => true, 'required' => true ])
            ->add('needAnswer', 'textarea', ['label' => '', 'trim' => true, 'required' => true ])

            ->add('save', 'submit', array('label' => 'Send message'))

            ->setErrorBubbling(false)
        ;

    }


    public function getName()
    {

        return 'RequestContactForm';
    }
}