<?php

namespace PHPCRProxies\__CG__\Doctrine\ODM\PHPCR\Document;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Generic extends \Doctrine\ODM\PHPCR\Document\Generic implements \Doctrine\Common\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'node', 'nodename', 'parent', 'children', 'referrers');
        }

        return array('__isInitialized__', 'id', 'node', 'nodename', 'parent', 'children', 'referrers');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Generic $proxy) {
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
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNode', array());

        return parent::getNode();
    }

    /**
     * {@inheritDoc}
     */
    public function getNodename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNodename', array());

        return parent::getNodename();
    }

    /**
     * {@inheritDoc}
     */
    public function setNodename($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNodename', array($name));

        return parent::setNodename($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentDocument', array());

        return parent::getParentDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', array());

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentDocument($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentDocument', array($parent));

        return parent::setParentDocument($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', array($parent));

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', array());

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setChildren(\Doctrine\Common\Collections\ArrayCollection $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', array($children));

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function addChild($child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', array($child));

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferrers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferrers', array());

        return parent::getReferrers();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferrers(\Doctrine\Common\Collections\ArrayCollection $referrers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferrers', array($referrers));

        return parent::setReferrers($referrers);
    }

    /**
     * {@inheritDoc}
     */
    public function addReferrer($referrer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReferrer', array($referrer));

        return parent::addReferrer($referrer);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
