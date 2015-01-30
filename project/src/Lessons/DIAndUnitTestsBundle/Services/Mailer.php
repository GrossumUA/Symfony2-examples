<?php

namespace Lessons\DIAndUnitTestsBundle\Services;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Config\FileLocator;

class Mailer
{
    /**
     * @var string
     */
    private $additionalEmail;

    public function __construct($additionalEmail)
    {
        $this->aditionalEmail = $additionalEmail;
    }

    /**
     * @param $email array
     * @param $message string
     */
    public function checkAndSend($email, $message)
    {

        try {
            $this->check($email);
            $this->send($email . ', ' . $this->aditionalEmail, $message);
        } catch (EmailIsNotValidException $exception) {
            throw $exception;
        }
    }

    /**
     * @param $email
     * @param $message
     */
    public function send($email, $message)
    {
        mail($email . ', ' . $this->additionalEmail, 'Email validation notification', $message);
    }

    /**
     * @param $email string email
     * @throws EmailIsNotValidException exception
     */
    public function check($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new EmailIsNotValidException('Looks like your email is incorrect!');
        }
    }
}

class EmailIsNotValidException extends Exception
{
}