<?php

namespace uos\uostmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hall
 */
class Hall
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var string
     */
    private $facilities;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Hall
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
     * Set capacity
     *
     * @param integer $capacity
     * @return Hall
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set facilities
     *
     * @param string $facilities
     * @return Hall
     */
    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;

        return $this;
    }

    /**
     * Get facilities
     *
     * @return string 
     */
    public function getFacilities()
    {
        return $this->facilities;
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
