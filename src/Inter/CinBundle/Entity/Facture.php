<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 */
class Facture
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var \DateTime
     */
    private $payeravant;

    /**
     * @var string
     */
    private $etat;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Inter\CinBundle\Entity\Cin
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
     * @param \Inter\CinBundle\Entity\Cin $cin
     * @return Facture
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
