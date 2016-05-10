<?php

namespace BackOffice\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extraitnaissances
 *
 * @ORM\Table(name="extraitnaissances")
 * @ORM\Entity
 */
class Extraitnaissances
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
     * @ORM\Column(name="sexe", type="string", length=10, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_naissance", type="string", length=50, nullable=false)
     */
    private $villeNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="pere", type="string", length=50, nullable=true)
     */
    private $pere;

    /**
     * @var string
     *
     * @ORM\Column(name="mere", type="string", length=50, nullable=true)
     */
    private $mere;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civile", type="string", length=50, nullable=false)
     */
    private $etatCivile;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Extraitnaissances
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
     * @return Extraitnaissances
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
     * Set sexe
     *
     * @param string $sexe
     * @return Extraitnaissances
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set villeNaissance
     *
     * @param string $villeNaissance
     * @return Extraitnaissances
     */
    public function setVilleNaissance($villeNaissance)
    {
        $this->villeNaissance = $villeNaissance;

        return $this;
    }

    /**
     * Get villeNaissance
     *
     * @return string 
     */
    public function getVilleNaissance()
    {
        return $this->villeNaissance;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Extraitnaissances
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
     * Set pere
     *
     * @param string $pere
     * @return Extraitnaissances
     */
    public function setPere($pere)
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * Get pere
     *
     * @return string 
     */
    public function getPere()
    {
        return $this->pere;
    }

    /**
     * Set mere
     *
     * @param string $mere
     * @return Extraitnaissances
     */
    public function setMere($mere)
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * Get mere
     *
     * @return string 
     */
    public function getMere()
    {
        return $this->mere;
    }

    /**
     * Set etatCivile
     *
     * @param string $etatCivile
     * @return Extraitnaissances
     */
    public function setEtatCivile($etatCivile)
    {
        $this->etatCivile = $etatCivile;

        return $this;
    }

    /**
     * Get etatCivile
     *
     * @return string 
     */
    public function getEtatCivile()
    {
        return $this->etatCivile;
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
}
