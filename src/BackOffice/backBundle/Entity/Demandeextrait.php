<?php

namespace BackOffice\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandeextrait
 *
 * @ORM\Table(name="demandeextrait", indexes={@ORM\Index(name="cin_pere", columns={"cin_pere"}), @ORM\Index(name="cin_mere", columns={"cin_mere"})})
 * @ORM\Entity
 */
class Demandeextrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=50, nullable=false)
     */
    private $lieuNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=100, nullable=true)
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
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_mere", referencedColumnName="id")
     * })
     */
    private $cinMere;

    /**
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin_pere", referencedColumnName="id")
     * })
     */
    private $cinPere;

     /**
     * @var \BackOffice\backBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

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
     * @param \BackOffice\backBundle\Entity\Cin $cinMere
     * @return Demandeextrait
     */
    public function setCinMere(\BackOffice\backBundle\Entity\Cin $cinMere = null)
    {
        $this->cinMere = $cinMere;

        return $this;
    }

    /**
     * Get cinMere
     *
     * @return \BackOffice\backBundle\Entity\Cin 
     */
    public function getCinMere()
    {
        return $this->cinMere;
    }

    /**
     * Set cinPere
     *
     * @param \BackOffice\backBundle\Entity\Cin $cinPere
     * @return Demandeextrait
     */
    public function setCinPere(\BackOffice\backBundle\Entity\Cin $cinPere = null)
    {
        $this->cinPere = $cinPere;

        return $this;
    }

    /**
     * Get cinPere
     *
     * @return \BackOffice\backBundle\Entity\Cin 
     */
    public function getCinPere()
    {
        return $this->cinPere;
    }

    /**
     * Set user
     *
     * @param \BackOffice\backBundle\Entity\FosUser $user
     * @return Demandeextrait
     */
    public function setUser(\BackOffice\backBundle\Entity\FosUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackOffice\backBundle\Entity\FosUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}
