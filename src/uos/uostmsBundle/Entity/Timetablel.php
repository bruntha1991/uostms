<?php

namespace uos\uostmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetablel
 */
class Timetablel
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $module;

    /**
     * @var integer
     */
    private $timeslot;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uostmsBundle\Entity\Hall
     */
    private $hall;

    /**
     * @var \uos\uostmsBundle\Entity\Lecturers
     */
    private $name;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Timetablel
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Timetablel
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set module
     *
     * @param string $module
     * @return Timetablel
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set timeslot
     *
     * @param integer $timeslot
     * @return Timetablel
     */
    public function setTimeslot($timeslot)
    {
        $this->timeslot = $timeslot;

        return $this;
    }

    /**
     * Get timeslot
     *
     * @return integer 
     */
    public function getTimeslot()
    {
        return $this->timeslot;
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

    /**
     * Set hall
     *
     * @param \uos\uostmsBundle\Entity\Hall $hall
     * @return Timetablel
     */
    public function setHall(\uos\uostmsBundle\Entity\Hall $hall = null)
    {
        $this->hall = $hall;

        return $this;
    }

    /**
     * Get hall
     *
     * @return \uos\uostmsBundle\Entity\Hall 
     */
    public function getHall()
    {
        return $this->hall;
    }

    /**
     * Set name
     *
     * @param \uos\uostmsBundle\Entity\Lecturers $name
     * @return Timetablel
     */
    public function setName(\uos\uostmsBundle\Entity\Lecturers $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return \uos\uostmsBundle\Entity\Lecturers 
     */
    public function getName()
    {
        return $this->name;
    }
}
