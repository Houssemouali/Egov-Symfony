<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autorisationcirculation
 */
class Autorisationcirculation
{
    /**
     * @var integer
     */
    private $cartegrise;

    /**
     * @var \DateTime
     */
    private $finautorisation;

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
     * @var \Inter\CinBundle\Entity\Compte
     */
    private $cpp;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $cin;


    /**
     * Set cartegrise
     *
     * @param integer $cartegrise
     * @return Autorisationcirculation
     */
    public function setCartegrise($cartegrise)
    {
        $this->cartegrise = $cartegrise;

        return $this;
    }

    /**
     * Get cartegrise
     *
     * @return integer 
     */
    public function getCartegrise()
    {
        return $this->cartegrise;
    }

    /**
     * Set finautorisation
     *
     * @param \DateTime $finautorisation
     * @return Autorisationcirculation
     */
    public function setFinautorisation($finautorisation)
    {
        $this->finautorisation = $finautorisation;

        return $this;
    }

    /**
     * Get finautorisation
     *
     * @return \DateTime 
     */
    public function getFinautorisation()
    {
        return $this->finautorisation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Autorisationcirculation
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
     * @return Autorisationcirculation
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
     * Set cpp
     *
     * @param \Inter\CinBundle\Entity\Compte $cpp
     * @return Autorisationcirculation
     */
    public function setCpp(\Inter\CinBundle\Entity\Compte $cpp = null)
    {
        $this->cpp = $cpp;

        return $this;
    }

    /**
     * Get cpp
     *
     * @return \Inter\CinBundle\Entity\Compte 
     */
    public function getCpp()
    {
        return $this->cpp;
    }

    /**
     * Set cin
     *
     * @param \Inter\CinBundle\Entity\Cin $cin
     * @return Autorisationcirculation
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
