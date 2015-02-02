<?php

namespace Lessons\FormsAndValidationBundle\Controller;

use Lessons\FormsAndValidationBundle\Entity\RequestContact;

use Lessons\FormsAndValidationBundle\Form\RequestContactForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FormController extends Controller
{

    private $gender = array(1=>'Male', 2=>'Female');

    public function requestAction(Request $request)
    {

        $options['gender'] = $this->gender;

        $requestContactForm = $this->createForm(new RequestContactForm($options), new RequestContact());

        $requestContactForm->handleRequest($request);


        if ($requestContactForm->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $requestContact = $requestContactForm->getData();

            $em->persist($requestContact);
            $em->flush();

            $request->getSession()->getFlashBag()->add(
                'done',
                'Your request is saved!'
            );

//            return $this->redirect($this->generateUrl('grossum_project'));
        }


        return $this->render('FormsAndValidationBundle:Form:index.html.twig', array(
            'request_contact_form' =>$requestContactForm->createView(),

        ));

    }
}
