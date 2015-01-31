<?php

namespace Lessons\FormsAndValidationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestContactType
 */
class RequestContactType
{
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
    private $weight;

    /**
     * @var boolean
     */
    private $status;


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
     * @return RequestContactType
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
     * Set weight
     *
     * @param integer $weight
     * @return RequestContactType
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return RequestContactType
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
     * @var \Lessons\FormsAndValidationBundle\Entity\RequestContact
     */
    private $category;


    /**
     * Set category
     *
     * @param \Lessons\FormsAndValidationBundle\Entity\RequestContact $category
     * @return RequestContactType
     */
    public function setCategory(\Lessons\FormsAndValidationBundle\Entity\RequestContact $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Lessons\FormsAndValidationBundle\Entity\RequestContact 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
