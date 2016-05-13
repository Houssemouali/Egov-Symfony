<?php

namespace BackOffice\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mariage
 *
 * @ORM\Table(name="mariage", indexes={@ORM\Index(name="cin_homme", columns={"cin_homme"}), @ORM\Index(name="cin_femme", columns={"cin_femme"})})
 * @ORM\Entity
 */
class Mariage
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mariage", type="date", nullable=false)
     */
    private $dateMariage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_femme", referencedColumnName="id")
     * })
     */
    private $cinFemme;

    /**
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_homme", referencedColumnName="id")
     * })
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
     * @param \BackOffice\backBundle\Entity\Cin $cinFemme
     * @return Mariage
     */
    public function setCinFemme($cinFemme)
    {
      return   $this->cinFemme;

        
    }

    /**
     * Get cinFemme
     *
     * @return \BackOffice\backBundle\Entity\Cin 
     */
    public function getCinFemme()
    {
        return $this->cinFemme;
    }

    /**
     * Set cinHomme
     *
     * @param \BackOffice\backBundle\Entity\Cin $cinHomme
     * @return Mariage
     */
    public function setCinHomme($cinHomme)
    {
       return $this->cinHomme; 

         
    }

    /**
     * Get cinHomme
     *
     * @return \BackOffice\backBundle\Entity\Cin 
     */
    public function getCinHomme()
    {
        return $this->cinHomme;
    }
}
