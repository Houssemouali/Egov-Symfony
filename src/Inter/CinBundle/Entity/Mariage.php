<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mariage
 */
class Mariage
{
    /**
     * @var \DateTime
     */
    private $dateMariage;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $cinFemme;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $cinHomme;


    /**
     * Set dateMariage
     *
     * @param \DateTime $dateMariage
     * @return Mariage
     */
    public function setDateMariage($dateMariage)
    {
        $this->dateMariage = $dateMariage;

        return $this;
    }

    /**
     * Get dateMariage
     *
     * @return \DateTime 
     */
    public function getDateMariage()
    {
        return $this->dateMariage;
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
     * Set cinFemme
     *
     * @param \Inter\CinBundle\Entity\Cin $cinFemme
     * @return Mariage
     */
    public function setCinFemme(\Inter\CinBundle\Entity\Cin $cinFemme = null)
    {
        $this->cinFemme = $cinFemme;

        return $this;
    }

    /**
     * Get cinFemme
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getCinFemme()
    {
        return $this->cinFemme;
    }

    /**
     * Set cinHomme
     *
     * @param \Inter\CinBundle\Entity\Cin $cinHomme
     * @return Mariage
     */
    public function setCinHomme(\Inter\CinBundle\Entity\Cin $cinHomme = null)
    {
        $this->cinHomme = $cinHomme;

        return $this;
    }

    /**
     * Get cinHomme
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getCinHomme()
    {
        return $this->cinHomme;
    }
}
