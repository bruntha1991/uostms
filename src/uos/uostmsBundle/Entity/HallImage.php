<?php

namespace uos\uostmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HallImage
 */
class HallImage
{
    /**
     * @var string
     */
    private $hall;

    /**
     * @var string
     */
    private $image1;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set hall
     *
     * @param string $hall
     * @return HallImage
     */
    public function setHall($hall)
    {
        $this->hall = $hall;

        return $this;
    }

    /**
     * Get hall
     *
     * @return string 
     */
    public function getHall()
    {
        return $this->hall;
    }

    /**
     * Set image1
     *
     * @param string $image1
     * @return HallImage
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
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
}
