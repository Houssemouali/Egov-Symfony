<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 */
class Demande
{
    /**
     * @var string
     */
    private $type;

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
     * @return Demande
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
     * Set etat
     *
     * @param string $etat
     * @return Demande
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
     * @return Demande
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
     * @return Demande
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
