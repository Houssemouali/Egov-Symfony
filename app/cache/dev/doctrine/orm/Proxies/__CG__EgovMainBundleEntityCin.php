<?php

namespace Proxies\__CG__\Egov\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cin extends \Egov\MainBundle\Entity\Cin implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'adresse', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'profession', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'lieuCreation', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'dateCreation', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'photo', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'empreinte', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'numCin', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'id', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'extrait'];
        }

        return ['__isInitialized__', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'adresse', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'profession', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'lieuCreation', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'dateCreation', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'photo', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'empreinte', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'numCin', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'id', '' . "\0" . 'Egov\\MainBundle\\Entity\\Cin' . "\0" . 'extrait'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cin $proxy) {
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
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfession($profession)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfession', [$profession]);

        return parent::setProfession($profession);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfession', []);

        return parent::getProfession();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieuCreation($lieuCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieuCreation', [$lieuCreation]);

        return parent::setLieuCreation($lieuCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieuCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieuCreation', []);

        return parent::getLieuCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto($photo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpreinte($empreinte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpreinte', [$empreinte]);

        return parent::setEmpreinte($empreinte);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpreinte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpreinte', []);

        return parent::getEmpreinte();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumCin($numCin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumCin', [$numCin]);

        return parent::setNumCin($numCin);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumCin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumCin', []);

        return parent::getNumCin();
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

    /**
     * {@inheritDoc}
     */
    public function setExtrait(\Egov\MainBundle\Entity\Extraitnaissances $extrait = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtrait', [$extrait]);

        return parent::setExtrait($extrait);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtrait()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtrait', []);

        return parent::getExtrait();
    }

}
