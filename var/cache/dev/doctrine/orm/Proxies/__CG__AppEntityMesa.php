<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mesa extends \App\Entity\Mesa implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'disponible' => [parent::class, 'disponible', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        "\0".parent::class."\0".'numeroPersonas' => [parent::class, 'numeroPersonas', null],
        "\0".parent::class."\0".'reservas' => [parent::class, 'reservas', null],
        "\0".parent::class."\0".'restaurante' => [parent::class, 'restaurante', null],
        'disponible' => [parent::class, 'disponible', null],
        'id' => [parent::class, 'id', null],
        'nombre' => [parent::class, 'nombre', null],
        'numeroPersonas' => [parent::class, 'numeroPersonas', null],
        'reservas' => [parent::class, 'reservas', null],
        'restaurante' => [parent::class, 'restaurante', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
