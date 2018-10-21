<?php

namespace CompteCPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="compte", indexes={@ORM\Index(name="user", columns={"cin"})})
 * @ORM\Entity
 */
class Compte
{
    /**
     * @var string
     *
     * @ORM\Column(name="num_compte", type="string", length=50, nullable=false)
     */
    private $numCompte;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CompteCPBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="CompteCPBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin", referencedColumnName="id")
     * })
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
     * @param \CompteCPBundle\Entity\Cin $cin
     * @return Compte
     */
    public function setCin(\CompteCPBundle\Entity\Cin $cin = null)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return \CompteCPBundle\Entity\Cin 
     */
    public function getCin()
    {
        return $this->cin;
    }
}
