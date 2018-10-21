<?php

namespace BackOffice\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Importer
 *
 * @ORM\Table(name="importer", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Importer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CIN", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="PathCarte", type="string", length=255, nullable=false)
     */
    private $pathcarte;

    /**
     * @var string
     *
     * @ORM\Column(name="PathPermis", type="string", length=255, nullable=false)
     */
    private $pathpermis;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
