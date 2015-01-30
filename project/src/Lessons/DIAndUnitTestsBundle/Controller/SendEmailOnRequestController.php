<?php
namespace Lessons\DIAndUnitTestsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lessons\DIAndUnitTestsBundle\Services\Mailer;
use Lessons\DIAndUnitTestsBundle\Services\EmailIsNotValidException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SendEmailOnRequestController extends Controller
{
    /**
     * @param Request $request
     * @param string $email
     * @return Response
     */
    public function indexAction(Request $request, $email = "")
    {
        $notificator = $this->get('lessons.di_and_unittests.Notificator');

        try {
            $notificator->checkAndNotify($email);
        } catch (EmailIsNotValidException $exception) {
            return new Response('Your email "' . $email . '" is invalid!');
        }

        return new Response('Your email "' . $email . '" is valid.');
    }
}