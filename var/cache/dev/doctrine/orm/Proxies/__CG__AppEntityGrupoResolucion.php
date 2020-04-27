<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GrupoResolucion extends \App\Entity\GrupoResolucion implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Nombre', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Nivel', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Estado', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Intervenciones'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'id', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Nombre', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Nivel', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Estado', '' . "\0" . 'App\\Entity\\GrupoResolucion' . "\0" . 'Intervenciones'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GrupoResolucion $proxy) {
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
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $Nombre): \App\Entity\GrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$Nombre]);

        return parent::setNombre($Nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNivel(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNivel', []);

        return parent::getNivel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNivel(?int $Nivel): \App\Entity\GrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNivel', [$Nivel]);

        return parent::setNivel($Nivel);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado(): ?\App\Entity\EstadoGrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(?\App\Entity\EstadoGrupoResolucion $Estado): \App\Entity\GrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$Estado]);

        return parent::setEstado($Estado);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getIntervenciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntervenciones', []);

        return parent::getIntervenciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addIntervencione(\App\Entity\Intervencion $intervencione): \App\Entity\GrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIntervencione', [$intervencione]);

        return parent::addIntervencione($intervencione);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIntervencione(\App\Entity\Intervencion $intervencione): \App\Entity\GrupoResolucion
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIntervencione', [$intervencione]);

        return parent::removeIntervencione($intervencione);
    }

}
