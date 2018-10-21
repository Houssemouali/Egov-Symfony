<?php

namespace Egov\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cin
 *
 * @ORM\Table(name="cin", indexes={@ORM\Index(name="extrait", columns={"extrait"})})
 * @ORM\Entity
 */
class Cin
{
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=50, nullable=false)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_creation", type="string", length=50, nullable=false)
     */
    private $lieuCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="text", nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="empreinte", type="text", nullable=true)
     */
    private $empreinte;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cin", type="string", length=8, nullable=false)
     */
    private $numCin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Egov\MainBundle\Entity\Extraitnaissances
     *
     * @ORM\ManyToOne(targetEntity="Egov\MainBundle\Entity\Extraitnaissances")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extrait", referencedColumnName="id")
     * })
     */
    private $extrait;



    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Cin
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return Cin
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set lieuCreation
     *
     * @param string $lieuCreation
     * @return Cin
     */
    public function setLieuCreation($lieuCreation)
    {
        $this->lieuCreation = $lieuCreation;

        return $this;
    }

    /**
     * Get lieuCreation
     *
     * @return string 
     */
    public function getLieuCreation()
    {
        return $this->lieuCreation;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Cin
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = new \DateTime;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Cin
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set empreinte
     *
     * @param string $empreinte
     * @return Cin
     */
    public function setEmpreinte($empreinte)
    {
        $this->empreinte = $empreinte;

        return $this;
    }

    /**
     * Get empreinte
     *
     * @return string 
     */
    public function getEmpreinte()
    {
        return $this->empreinte;
    }

    /**
     * Set numCin
     *
     * @param string $numCin
     * @return Cin
     */
    public function setNumCin($numCin)
    {
        $this->numCin = $numCin;

        return $this;
    }

    /**
     * Get numCin
     *
     * @return string 
     */
    public function getNumCin()
    {
        return $this->numCin;
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
     * Set extrait
     *
     * @param \Egov\MainBundle\Entity\Extraitnaissances $extrait
     * @return Cin
     */
    public function setExtrait(\Egov\MainBundle\Entity\Extraitnaissances $extrait = null)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return \Egov\MainBundle\Entity\Extraitnaissances 
     */
    public function getExtrait()
    {
        return $this->extrait;
    }
}
