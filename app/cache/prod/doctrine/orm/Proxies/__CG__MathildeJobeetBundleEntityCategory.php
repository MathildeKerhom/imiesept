<?php

namespace Proxies\__CG__\Mathilde\JobeetBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \Mathilde\JobeetBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'affiliates', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'active_jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'more_jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'slug');
        }

        return array('__isInitialized__', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'affiliates', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'active_jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'more_jobs', '' . "\0" . 'Mathilde\\JobeetBundle\\Entity\\Category' . "\0" . 'slug');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addJob(\Mathilde\JobeetBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addJob', array($jobs));

        return parent::addJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeJob(\Mathilde\JobeetBundle\Entity\Job $jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeJob', array($jobs));

        return parent::removeJob($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function getJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJobs', array());

        return parent::getJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function addAffiliate(\Mathilde\JobeetBundle\Entity\Affiliate $affiliates)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAffiliate', array($affiliates));

        return parent::addAffiliate($affiliates);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAffiliate(\Mathilde\JobeetBundle\Entity\Affiliate $affiliates)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAffiliate', array($affiliates));

        return parent::removeAffiliate($affiliates);
    }

    /**
     * {@inheritDoc}
     */
    public function getAffiliates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffiliates', array());

        return parent::getAffiliates();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiveJobs($jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiveJobs', array($jobs));

        return parent::setActiveJobs($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveJobs', array());

        return parent::getActiveJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoreJobs($jobs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoreJobs', array($jobs));

        return parent::setMoreJobs($jobs);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoreJobs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoreJobs', array());

        return parent::getMoreJobs();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
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
    public function setSlugValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlugValue', array());

        return parent::setSlugValue();
    }

}
