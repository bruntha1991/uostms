<?php

namespace uos\uostmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timetable
 */
class Timetable
{
    /**
     * @var integer
     */
    private $year;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $timeslot;

    /**
     * @var string
     */
    private $module;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \uos\uostmsBundle\Entity\Lecturers
     */
    private $lecturer;

    /**
     * @var \uos\uostmsBundle\Entity\Hall
     */
    private $hall;


    /**
     * Set year
     *
     * @param integer $year
     * @return Timetable
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
     * Set date
     *
     * @param \DateTime $date
     * @return Timetable
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
     * Set timeslot
     *
     * @param integer $timeslot
     * @return Timetable
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
     * Set module
     *
     * @param string $module
     * @return Timetable
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lecturer
     *
     * @param \uos\uostmsBundle\Entity\Lecturers $lecturer
     * @return Timetable
     */
    public function setLecturer(\uos\uostmsBundle\Entity\Lecturers $lecturer = null)
    {
        $this->lecturer = $lecturer;

        return $this;
    }

    /**
     * Get lecturer
     *
     * @return \uos\uostmsBundle\Entity\Lecturers 
     */
    public function getLecturer()
    {
        return $this->lecturer;
    }

    /**
     * Set hall
     *
     * @param \uos\uostmsBundle\Entity\Hall $hall
     * @return Timetable
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
}
