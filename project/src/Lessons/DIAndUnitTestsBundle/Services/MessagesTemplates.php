<?php

namespace Lessons\DIAndUnitTestsBundle\Services;

use Symfony\Component\Config\FileLocator;

class MessagesTemplates
{
    /**
     * @var string
     */
    protected $emailIsValid;

    /**
     * @var string
     */
    protected $emailIsInvalid;

    public function __construct($emailIsValid, $emailIsInvalid)
    {
        $this->emailIsValid = $emailIsValid;
        $this->emailIsInvalid = $emailIsInvalid;
    }

    /**
     * @param $email
     * @return string
     */
    public function getEmailIsValidMessage($email)
    {
        return $this->emailIsValid . $email;
    }

    /**
     * @param $email
     * @return string
     */
    public function getEmailIsInValidMessage($email)
    {
        return $this->emailIsInvalid . $email;
    }
}