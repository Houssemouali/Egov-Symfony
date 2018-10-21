<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 */
class Reclamation
{
    /**
     * @var string
     */
    private $objet;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $utilisateur;


    /**
     * Set objet
     *
     * @param string $objet
     * @return Reclamation
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
     * Set utilisateur
     *
     * @param \Inter\CinBundle\Entity\Cin $utilisateur
     * @return Reclamation
     */
    public function setUtilisateur(\Inter\CinBundle\Entity\Cin $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
