<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 */
class Compte
{
    /**
     * @var string
     */
    private $numCompte;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $cin;


    /**
     * Set numCompte
     *
     * @param string $numCompte
     * @return Compte
     */
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;

        return $this;
    }

    /**
     * Get numCompte
     *
     * @return string 
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Compte
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer 
     */
    public function getMontant()
    {
        return $this->montant;
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
     * Set cin
     *
     * @param \Inter\CinBundle\Entity\Cin $cin
     * @return Compte
     */
    public function setCin(\Inter\CinBundle\Entity\Cin $cin = null)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getCin()
    {
        return $this->cin;
    }
}
