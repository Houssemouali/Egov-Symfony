<?php

namespace BackOffice\backBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autorisationcirculation
 *
 * @ORM\Table(name="autorisationcirculation", indexes={@ORM\Index(name="user", columns={"cin"}), @ORM\Index(name="cpp", columns={"cpp"})})
 * @ORM\Entity
 */
class Autorisationcirculation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CarteGrise", type="integer", nullable=false)
     */
    private $cartegrise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FinAutorisation", type="date", nullable=false)
     */
    private $finautorisation;

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
     * @var \BackOffice\backBundle\Entity\Compte
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpp", referencedColumnName="id")
     * })
     */
    private $cpp;

    /**
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin", referencedColumnName="id")
     * })
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
     * @param \BackOffice\backBundle\Entity\Compte $cpp
     * @return Autorisationcirculation
     */
    public function setCpp(\BackOffice\backBundle\Entity\Compte $cpp = null)
    {
        $this->cpp = $cpp;

        return $this;
    }

    /**
     * Get cpp
     *
     * @return \BackOffice\backBundle\Entity\Compte 
     */
    public function getCpp()
    {
        return $this->cpp;
    }

    /**
     * Set cin
     *
     * @param \BackOffice\backBundle\Entity\Cin $cin
     * @return Autorisationcirculation
     */
    public function setCin(\BackOffice\backBundle\Entity\Cin $cin = null)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return \BackOffice\backBundle\Entity\Cin 
     */
    public function getCin()
    {
        return $this->cin;
    }
}
