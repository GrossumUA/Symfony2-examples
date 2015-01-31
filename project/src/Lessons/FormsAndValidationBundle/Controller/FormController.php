<?php

namespace Lessons\FormsAndValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FormsAndValidationBundle:Default:index.html.twig', array('name' => $name));
    }
}
