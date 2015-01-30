<?php

namespace Lessons\DIAndUnitTestsBundle\Services;

use Lessons\DIAndUnitTestsBundle\Services\Mailer;
use Lessons\DIAndUnitTestsBundle\Services\MessagesTemplates;
use Lessons\DIAndUnitTestsBundle\Services\EmailIsNotValidException;

class Notificator
{
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * @var MessagesTemplates
     */
    private $messagesTemplates;

    public function __construct(Mailer $mailer, MessagesTemplates $messagesTemplates)
    {
        $this->mailer = $mailer;
        $this->messagesTemplates = $messagesTemplates;
    }

    /**
     * @param $email string
     */
    public function checkAndNotify($email)
    {
        try {
            $this->mailer->checkAndSend($email, $this->messagesTemplates->getEmailIsValidMessage($email));
        } catch (EmailIsNotValidException $exception) {
            $this->sendEmailIsInValidNotification($email);
            throw $exception;
        }
    }

    /**
     * @param $email string
     */
    private function sendEmailIsInValidNotification($email)
    {
        $this->mailer->send($email, $this->messagesTemplates->getEmailIsInValidMessage($email));
    }
}