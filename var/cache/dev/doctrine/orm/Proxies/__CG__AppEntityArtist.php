<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Artist extends \App\Entity\Artist implements \Doctrine\Persistence\Proxy
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
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'dateOfBirth' => [parent::class, 'dateOfBirth', null],
        "\0".parent::class."\0".'dateOfDeath' => [parent::class, 'dateOfDeath', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'firstname' => [parent::class, 'firstname', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'idTypeArtist' => [parent::class, 'idTypeArtist', null],
        "\0".parent::class."\0".'imageThumbnail' => [parent::class, 'imageThumbnail', null],
        "\0".parent::class."\0".'lastname' => [parent::class, 'lastname', null],
        "\0".parent::class."\0".'link' => [parent::class, 'link', null],
        "\0".parent::class."\0".'nationality' => [parent::class, 'nationality', null],
        "\0".parent::class."\0".'pieces' => [parent::class, 'pieces', null],
        "\0".parent::class."\0".'pistes' => [parent::class, 'pistes', null],
        "\0".parent::class."\0".'source' => [parent::class, 'source', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'dateOfBirth' => [parent::class, 'dateOfBirth', null],
        'dateOfDeath' => [parent::class, 'dateOfDeath', null],
        'description' => [parent::class, 'description', null],
        'firstname' => [parent::class, 'firstname', null],
        'id' => [parent::class, 'id', null],
        'idTypeArtist' => [parent::class, 'idTypeArtist', null],
        'imageThumbnail' => [parent::class, 'imageThumbnail', null],
        'lastname' => [parent::class, 'lastname', null],
        'link' => [parent::class, 'link', null],
        'nationality' => [parent::class, 'nationality', null],
        'pieces' => [parent::class, 'pieces', null],
        'pistes' => [parent::class, 'pistes', null],
        'source' => [parent::class, 'source', null],
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
