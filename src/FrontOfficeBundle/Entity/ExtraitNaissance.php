<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace FrontOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table{name="extrait"}
*/

class ExtraitNaissance {
     /**
     *@ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     * 
     * 
     */
    private $id;
    
     /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $nom;
    /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $prenom;
    
    /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $nomPere;
    
    /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $nomMere;
    
    
    
    
        /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $adresse_naissance;
    
        /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $sex;
    
        /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    private $date_naissance;
    
        /**
     *@ORM\Column(type="string",length=255)
     * 
     */
    
    private $nationalite;
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setNomPere($nomPere) {
        $this->nomPere = $nomPere;
    }

    function setNomMere($nomMere) {
        $this->nomMere = $nomMere;
    }

    function setAdresse_naissance($adresse_naissance) {
        $this->adresse_naissance = $adresse_naissance;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    function setNationalite($nationalite) {
        $this->nationalite = $nationalite;
    }

        function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getNomPere() {
        return $this->nomPere;
    }

    function getNomMere() {
        return $this->nomMere;
    }

    function getAdresse_naissance() {
        return $this->adresse_naissance;
    }

    function getSex() {
        return $this->sex;
    }

    function getDate_naissance() {
        return $this->date_naissance;
    }

    function getNationalite() {
        return $this->nationalite;
    }


    
    
    
    
    
    
    
    
}

