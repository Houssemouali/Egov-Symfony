<?php

namespace Inter\CinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importer
 */
class Importer
{
    /**
     * @var integer
     */
    private $cin;

    /**
     * @var string
     */
    private $pathcarte;

    /**
     * @var string
     */
    private $pathpermis;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set cin
     *
     * @param integer $cin
     * @return Importer
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set pathcarte
     *
     * @param string $pathcarte
     * @return Importer
     */
    public function setPathcarte($pathcarte)
    {
        $this->pathcarte = $pathcarte;

        return $this;
    }

    /**
     * Get pathcarte
     *
     * @return string 
     */
    public function getPathcarte()
    {
        return $this->pathcarte;
    }

    /**
     * Set pathpermis
     *
     * @param string $pathpermis
     * @return Importer
     */
    public function setPathpermis($pathpermis)
    {
        $this->pathpermis = $pathpermis;

        return $this;
    }

    /**
     * Get pathpermis
     *
     * @return string 
     */
    public function getPathpermis()
    {
        return $this->pathpermis;
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
