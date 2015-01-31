<?php

namespace Lessons\FormsAndValidationBundle\Controller;

use Lessons\FormsAndValidationBundle\Entity\RequestContact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{

//    private $gender = array('m'=>1, 'f'=>2);

    public function requestAction()
    {


//        $requestContactForm = $this->createForm(new RequestContactForm($options), new RequestContact());
//
//        $requestProjectForm->handleRequest($request);
//
//        if ($requestProjectForm->isValid()) {
//
//            $em = $this->getDoctrine()->getManager();
//
//            $requestProject = $requestProjectForm->getData();
//
//            $requestProject->setStatus(true);
//
//            $em->persist($requestProject);
//            $em->flush();
//
//            $request->getSession()->getFlashBag()->add(
//                'done',
//                'Your request is saved!'
//            );
//
//            return $this->redirect($this->generateUrl('grossum_project'));
//        }



        return $this->render('FormsAndValidationBundle:Form:index.html.twig');
    }
}
