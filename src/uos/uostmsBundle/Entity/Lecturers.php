<?php

namespace uos\uostmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lecturers
 */
class Lecturers
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $mobileNo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Lecturers
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
     * Set mobileNo
     *
     * @param integer $mobileNo
     * @return Lecturers
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return integer 
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString() {
        return "$this->name";
    }
}
