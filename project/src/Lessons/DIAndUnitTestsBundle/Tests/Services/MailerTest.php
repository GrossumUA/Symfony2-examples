<?php

namespace Lessons\DIAndUnitTestsBundle\Tests\Services;

use Symfony\Component\Config\Definition\Exception\Exception;
use Lessons\DIAndUnitTestsBundle\Services\Mailer;
use Lessons\DIAndUnitTestsBundle\Services\EmailIsNotValidException;

/**
 * Class MailerTest
 * @package Lessons\DIAndUnitTestsBundle\Tests\Services
 * To test this class please run from the project folder under vagrant box:
 * ./bin/phpunit -c app/ src/Lessons/DIAndUnitTestsBundle/Tests/Services/MailerTest.php
 *
 */
class MailerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * @before
     */
    public function setupMailerClass()
    {
        $this->mailer = new Mailer('testAdminEmail@example.com');
    }

    public function testCheckValidEmail()
    {
        $this->mailer->check('valid@email.com');
        $this->assertTrue(true, 'Email is not valid.');
    }

    /**
     * @expectedException Lessons\DIAndUnitTestsBundle\Services\EmailIsNotValidException
     */
    public function testCheckInvalidEmail()
    {
        try {
            $this->mailer->check('askjku34@!@#%%^#');
        } catch (EmailIsNotValidException $exception) {
            $this->assertTrue(true, 'Email is not valid.');
            throw $exception;
        }
    }
}

