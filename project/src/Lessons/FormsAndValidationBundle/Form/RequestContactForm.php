<?php

namespace Lessons\FormsAndValidationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

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
            ->add('email', 'email', ['label' => '', 'trim' => true, 'required' => true ])
            ->add('message', 'textarea', ['label' => '', 'trim' => true, 'required' => true ])

            ->add('save', 'submit', array('label' => 'Send message'))

            ->setErrorBubbling(false)
        ;

        //add custom field to form
        $builder->add('needAnswer', 'choice', array(
            'choices'   => array(1=>'Yes', 0=>'No'),
            'data'      => 1,
            'required'  => false,
            'expanded'  => false,

        ));

        //add custom field to form
        $builder->add('gender', 'choice', array(
            'choices'   => $this->options['gender'],
            'required'  => false,
            'expanded'  =>true,
        ));

        //send email after submit
        $builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'sendEmail'));

    }

    public function sendEmail($event){

    }


    public function getName()
    {

        return 'RequestContactForm';
    }
}