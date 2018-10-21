<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandeextrait
 */
class Demandeextrait
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $lieuNaissance;

    /**
     * @var \DateTime
     */
    private $dateNaissance;

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
    private $cinMere;

    /**
     * @var \Inter\CinBundle\Entity\Cin
     */
    private $cinPere;


    /**
     * Set nom
     *
     * @param string $nom
     * @return Demandeextrait
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Demandeextrait
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     * @return Demandeextrait
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string 
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Demandeextrait
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Demandeextrait
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
     * @return Demandeextrait
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
     * Set cinMere
     *
     * @param \Inter\CinBundle\Entity\Cin $cinMere
     * @return Demandeextrait
     */
    public function setCinMere(\Inter\CinBundle\Entity\Cin $cinMere = null)
    {
        $this->cinMere = $cinMere;

        return $this;
    }

    /**
     * Get cinMere
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getCinMere()
    {
        return $this->cinMere;
    }

    /**
     * Set cinPere
     *
     * @param \Inter\CinBundle\Entity\Cin $cinPere
     * @return Demandeextrait
     */
    public function setCinPere(\Inter\CinBundle\Entity\Cin $cinPere = null)
    {
        $this->cinPere = $cinPere;

        return $this;
    }

    /**
     * Get cinPere
     *
     * @return \Inter\CinBundle\Entity\Cin 
     */
    public function getCinPere()
    {
        return $this->cinPere;
    }
}
