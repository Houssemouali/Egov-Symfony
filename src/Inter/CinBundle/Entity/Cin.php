<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cin
 */
class Cin
{
    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $profession;

    /**
     * @var string
     */
    private $lieuCreation;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $empreinte;

    /**
     * @var string
     */
    private $numCin;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Inter\CinBundle\Entity\Extraitnaissances
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
     * @param \Inter\CinBundle\Entity\Extraitnaissances $extrait
     * @return Cin
     */
    public function setExtrait(\Inter\CinBundle\Entity\Extraitnaissances $extrait = null)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return \Inter\CinBundle\Entity\Extraitnaissances 
     */
    public function getExtrait()
    {
        return $this->extrait;
    }
}
