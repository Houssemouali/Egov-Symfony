<?php

namespace Proxies\__CG__\CompteCPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Extraitnaissances extends \CompteCPBundle\Entity\Extraitnaissances implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'nom', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'prenom', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'sexe', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'villeNaissance', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'dateNaissance', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'pere', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'mere', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'etatCivile', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'id'];
        }

        return ['__isInitialized__', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'nom', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'prenom', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'sexe', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'villeNaissance', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'dateNaissance', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'pere', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'mere', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'etatCivile', '' . "\0" . 'CompteCPBundle\\Entity\\Extraitnaissances' . "\0" . 'id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Extraitnaissances $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe($sexe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setVilleNaissance($villeNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVilleNaissance', [$villeNaissance]);

        return parent::setVilleNaissance($villeNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getVilleNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVilleNaissance', []);

        return parent::getVilleNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance($dateNaissance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$dateNaissance]);

        return parent::setDateNaissance($dateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setPere($pere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPere', [$pere]);

        return parent::setPere($pere);
    }

    /**
     * {@inheritDoc}
     */
    public function getPere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPere', []);

        return parent::getPere();
    }

    /**
     * {@inheritDoc}
     */
    public function setMere($mere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMere', [$mere]);

        return parent::setMere($mere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMere', []);

        return parent::getMere();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatCivile($etatCivile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatCivile', [$etatCivile]);

        return parent::setEtatCivile($etatCivile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatCivile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatCivile', []);

        return parent::getEtatCivile();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

}
