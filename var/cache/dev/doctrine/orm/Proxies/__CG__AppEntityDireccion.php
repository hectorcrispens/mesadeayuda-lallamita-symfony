<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Direccion extends \App\Entity\Direccion implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Calle', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Piso', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Numero', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Oficina'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Calle', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Piso', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Numero', '' . "\0" . 'App\\Entity\\Direccion' . "\0" . 'Oficina'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Direccion $proxy) {
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
    public function getId(): ?int
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
    public function getIdDireccion(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdDireccion', []);

        return parent::getIdDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdDireccion(int $Id_Direccion): \App\Entity\Direccion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdDireccion', [$Id_Direccion]);

        return parent::setIdDireccion($Id_Direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCalle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalle', []);

        return parent::getCalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setCalle(?string $Calle): \App\Entity\Direccion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCalle', [$Calle]);

        return parent::setCalle($Calle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiso(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiso', []);

        return parent::getPiso();
    }

    /**
     * {@inheritDoc}
     */
    public function setPiso(?int $Piso): \App\Entity\Direccion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiso', [$Piso]);

        return parent::setPiso($Piso);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero(?int $Numero): \App\Entity\Direccion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$Numero]);

        return parent::setNumero($Numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getOficina(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOficina', []);

        return parent::getOficina();
    }

    /**
     * {@inheritDoc}
     */
    public function setOficina(?string $Oficina): \App\Entity\Direccion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOficina', [$Oficina]);

        return parent::setOficina($Oficina);
    }

}
