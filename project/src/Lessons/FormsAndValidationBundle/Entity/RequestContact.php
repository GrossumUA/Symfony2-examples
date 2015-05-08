<?php

namespace Lessons\FormsAndValidationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestContact
 */
class RequestContact
{

    const STATUS_UNREAD = 1;


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $gender;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $needAnswer;

    /**
     * @var boolean
     */
    private $status = self::STATUS_UNREAD;

    /**
     * @var \Lessons\FormsAndValidationBundle\Entity\RequestContactType
     */
    private $requestType;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return RequestContact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     * @return RequestContact
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return integer 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return RequestContact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return RequestContact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set needAnswer
     *
     * @param integer $needAnswer
     * @return RequestContact
     */
    public function setNeedAnswer($needAnswer)
    {
        $this->needAnswer = $needAnswer;

        return $this;
    }

    /**
     * Get needAnswer
     *
     * @return integer 
     */
    public function getNeedAnswer()
    {
        return $this->needAnswer;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return RequestContact
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set requestType
     *
     * @param \Lessons\FormsAndValidationBundle\Entity\RequestContactType $requestType
     * @return RequestContact
     */
    public function setRequestType(\Lessons\FormsAndValidationBundle\Entity\RequestContactType $requestType = null)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType
     *
     * @return \Lessons\FormsAndValidationBundle\Entity\RequestContactType 
     */
    public function getRequestType()
    {
        return $this->requestType;
    }
}
