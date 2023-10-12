<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Restaurante extends \App\Entity\Restaurante implements \Doctrine\Persistence\Proxy
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
        "\0".parent::class."\0".'Direccion' => [parent::class, 'Direccion', null],
        "\0".parent::class."\0".'contacto' => [parent::class, 'contacto', null],
        "\0".parent::class."\0".'descripcion' => [parent::class, 'descripcion', null],
        "\0".parent::class."\0".'horario' => [parent::class, 'horario', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'imageFile' => [parent::class, 'imageFile', null],
        "\0".parent::class."\0".'imageFileCarta' => [parent::class, 'imageFileCarta', null],
        "\0".parent::class."\0".'imagenCarta' => [parent::class, 'imagenCarta', null],
        "\0".parent::class."\0".'imagenRestaurante' => [parent::class, 'imagenRestaurante', null],
        "\0".parent::class."\0".'mesas' => [parent::class, 'mesas', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        "\0".parent::class."\0".'opinions' => [parent::class, 'opinions', null],
        "\0".parent::class."\0".'reservas' => [parent::class, 'reservas', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        "\0".parent::class."\0".'users' => [parent::class, 'users', null],
        'Direccion' => [parent::class, 'Direccion', null],
        'contacto' => [parent::class, 'contacto', null],
        'descripcion' => [parent::class, 'descripcion', null],
        'horario' => [parent::class, 'horario', null],
        'id' => [parent::class, 'id', null],
        'imageFile' => [parent::class, 'imageFile', null],
        'imageFileCarta' => [parent::class, 'imageFileCarta', null],
        'imagenCarta' => [parent::class, 'imagenCarta', null],
        'imagenRestaurante' => [parent::class, 'imagenRestaurante', null],
        'mesas' => [parent::class, 'mesas', null],
        'nombre' => [parent::class, 'nombre', null],
        'opinions' => [parent::class, 'opinions', null],
        'reservas' => [parent::class, 'reservas', null],
        'user' => [parent::class, 'user', null],
        'users' => [parent::class, 'users', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            "\0".parent::class."\0".'imageFile' => true,
            "\0".parent::class."\0".'imageFileCarta' => true,
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