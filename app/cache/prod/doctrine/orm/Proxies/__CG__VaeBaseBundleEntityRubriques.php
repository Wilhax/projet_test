<?php

namespace Proxies\__CG__\Vae\BaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Rubriques extends \Vae\BaseBundle\Entity\Rubriques implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'slug', 'slugEn', 'nom', 'nomEn', 'contenu', 'contenuEn', 'image');
        }

        return array('__isInitialized__', 'id', 'slug', 'slugEn', 'nom', 'nomEn', 'contenu', 'contenuEn', 'image');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Rubriques $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlugEn($slugEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugEn', array($slugEn));

        return parent::setSlugEn($slugEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlugEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlugEn', array());

        return parent::getSlugEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEn($nomEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEn', array($nomEn));

        return parent::setNomEn($nomEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEn', array());

        return parent::getNomEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu($contenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', array($contenu));

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', array());

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenuEn($contenuEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenuEn', array($contenuEn));

        return parent::setContenuEn($contenuEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenuEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenuEn', array());

        return parent::getContenuEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSites(\Vae\MultiSiteBundle\Entity\Sites $sites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSites', array($sites));

        return parent::setSites($sites);
    }

    /**
     * {@inheritDoc}
     */
    public function getSites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSites', array());

        return parent::getSites();
    }

}