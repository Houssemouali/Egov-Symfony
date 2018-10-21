<?php

namespace Egov\MainBundle\Entity;

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
     * @var \Egov\MainBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="Egov\MainBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_femme", referencedColumnName="id")
     * })
     */
    private $cinFemme;

    /**
     * @var \Egov\MainBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="Egov\MainBundle\Entity\Cin")
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
     * @param \Egov\MainBundle\Entity\Cin $cinFemme
     * @return Mariage
     */
    public function setCinFemme(\Egov\MainBundle\Entity\Cin $cinFemme = null)
    {
        $this->cinFemme = $cinFemme;

        return $this;
    }

    /**
     * Get cinFemme
     *
     * @return \Egov\MainBundle\Entity\Cin 
     */
    public function getCinFemme()
    {
        return $this->cinFemme;
    }

    /**
     * Set cinHomme
     *
     * @param \Egov\MainBundle\Entity\Cin $cinHomme
     * @return Mariage
     */
    public function setCinHomme(\Egov\MainBundle\Entity\Cin $cinHomme = null)
    {
        $this->cinHomme = $cinHomme;

        return $this;
    }

    /**
     * Get cinHomme
     *
     * @return \Egov\MainBundle\Entity\Cin 
     */
    public function getCinHomme()
    {
        return $this->cinHomme;
    }
}
