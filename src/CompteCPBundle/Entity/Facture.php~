<?php

namespace CompteCPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", uniqueConstraints={@ORM\UniqueConstraint(name="id_Facture", columns={"id"})}, indexes={@ORM\Index(name="cin", columns={"cin"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="Montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PayerAvant", type="date", nullable=false)
     */
    private $payeravant;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=200, nullable=true)
     */
    private $commentaire;

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
     * Set type
     *
     * @param string $type
     * @return Facture
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     * @return Facture
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
     * Set payeravant
     *
     * @param \DateTime $payeravant
     * @return Facture
     */
    public function setPayeravant($payeravant)
    {
        $this->payeravant = $payeravant;

        return $this;
    }

    /**
     * Get payeravant
     *
     * @return \DateTime 
     */
    public function getPayeravant()
    {
        return $this->payeravant;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Facture
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Facture
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
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
     * @return Facture
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
