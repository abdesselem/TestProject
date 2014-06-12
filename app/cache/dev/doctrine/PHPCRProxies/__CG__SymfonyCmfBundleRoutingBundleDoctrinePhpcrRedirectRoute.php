<?php

namespace PHPCRProxies\__CG__\Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RedirectRoute extends \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\RedirectRoute implements \Doctrine\Common\Proxy\Proxy
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
            return array('__isInitialized__', 'parent', 'name', 'children', 'idPrefix', 'uri', 'routeName', 'routeTarget', 'permanent', 'parameters', 'id', 'content', 'staticPrefix', 'variablePattern', 'needRecompile');
        }

        return array('__isInitialized__', 'parent', 'name', 'children', 'idPrefix', 'uri', 'routeName', 'routeTarget', 'permanent', 'parameters', 'id', 'content', 'staticPrefix', 'variablePattern', 'needRecompile');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RedirectRoute $proxy) {
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
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', array($parent));

        return parent::setParent($parent);
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
    public function getParentDocument()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentDocument', array());

        return parent::getParentDocument();
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
    public function setPosition($parent, $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($parent, $name));

        return parent::setPosition($parent, $name);
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setStaticPrefix($prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStaticPrefix', array($prefix));

        return parent::setStaticPrefix($prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrefix', array());

        return parent::getPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrefix($idPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrefix', array($idPrefix));

        return parent::setPrefix($idPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getStaticPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStaticPrefix', array());

        return parent::getStaticPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function generateStaticPrefix($id, $idPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateStaticPrefix', array($id, $idPrefix));

        return parent::generateStaticPrefix($id, $idPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', array());

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($pattern)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', array($pattern));

        return parent::setPath($pattern);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteChildren', array());

        return parent::getRouteChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($document));

        return parent::setContent($document);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setRouteTarget(\Symfony\Component\Routing\Route $document)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRouteTarget', array($document));

        return parent::setRouteTarget($document);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteTarget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteTarget', array());

        return parent::getRouteTarget();
    }

    /**
     * {@inheritDoc}
     */
    public function setRouteName($routeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRouteName', array($routeName));

        return parent::setRouteName($routeName);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteName', array());

        return parent::getRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPermanent($permanent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPermanent', array($permanent));

        return parent::setPermanent($permanent);
    }

    /**
     * {@inheritDoc}
     */
    public function isPermanent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPermanent', array());

        return parent::isPermanent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParameters(array $parameters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParameters', array($parameters));

        return parent::setParameters($parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParameters', array());

        return parent::getParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function setUri($uri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUri', array($uri));

        return parent::setUri($uri);
    }

    /**
     * {@inheritDoc}
     */
    public function getUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUri', array());

        return parent::getUri();
    }

    /**
     * {@inheritDoc}
     */
    public function getAddFormatPattern()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddFormatPattern', array());

        return parent::getAddFormatPattern();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddFormatPattern($addFormatPattern)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddFormatPattern', array($addFormatPattern));

        return parent::setAddFormatPattern($addFormatPattern);
    }

    /**
     * {@inheritDoc}
     */
    public function getRouteKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouteKey', array());

        return parent::getRouteKey();
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
    public function setOptions(array $options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', array($options));

        return parent::setOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function getOption($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOption', array($name));

        return parent::getOption($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', array());

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function getPattern()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPattern', array());

        return parent::getPattern();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariablePattern()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariablePattern', array());

        return parent::getVariablePattern();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariablePattern($variablePattern)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariablePattern', array($variablePattern));

        return parent::setVariablePattern($variablePattern);
    }

    /**
     * {@inheritDoc}
     */
    public function compile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'compile', array());

        return parent::compile();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($data));

        return parent::unserialize($data);
    }

    /**
     * {@inheritDoc}
     */
    public function setPattern($pattern)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPattern', array($pattern));

        return parent::setPattern($pattern);
    }

    /**
     * {@inheritDoc}
     */
    public function getHost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHost', array());

        return parent::getHost();
    }

    /**
     * {@inheritDoc}
     */
    public function setHost($pattern)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHost', array($pattern));

        return parent::setHost($pattern);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemes', array());

        return parent::getSchemes();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemes($schemes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemes', array($schemes));

        return parent::setSchemes($schemes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMethods()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMethods', array());

        return parent::getMethods();
    }

    /**
     * {@inheritDoc}
     */
    public function setMethods($methods)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMethods', array($methods));

        return parent::setMethods($methods);
    }

    /**
     * {@inheritDoc}
     */
    public function addOptions(array $options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOptions', array($options));

        return parent::addOptions($options);
    }

    /**
     * {@inheritDoc}
     */
    public function setOption($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOption', array($name, $value));

        return parent::setOption($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function hasOption($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasOption', array($name));

        return parent::hasOption($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaults()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaults', array());

        return parent::getDefaults();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaults(array $defaults)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaults', array($defaults));

        return parent::setDefaults($defaults);
    }

    /**
     * {@inheritDoc}
     */
    public function addDefaults(array $defaults)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDefaults', array($defaults));

        return parent::addDefaults($defaults);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefault($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefault', array($name));

        return parent::getDefault($name);
    }

    /**
     * {@inheritDoc}
     */
    public function hasDefault($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasDefault', array($name));

        return parent::hasDefault($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefault($name, $default)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefault', array($name, $default));

        return parent::setDefault($name, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequirements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequirements', array());

        return parent::getRequirements();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequirements(array $requirements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequirements', array($requirements));

        return parent::setRequirements($requirements);
    }

    /**
     * {@inheritDoc}
     */
    public function addRequirements(array $requirements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRequirements', array($requirements));

        return parent::addRequirements($requirements);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequirement($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequirement', array($key));

        return parent::getRequirement($key);
    }

    /**
     * {@inheritDoc}
     */
    public function hasRequirement($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRequirement', array($key));

        return parent::hasRequirement($key);
    }

    /**
     * {@inheritDoc}
     */
    public function setRequirement($key, $regex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequirement', array($key, $regex));

        return parent::setRequirement($key, $regex);
    }

}
