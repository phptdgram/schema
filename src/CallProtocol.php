<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Specifies the supported call protocols.
 */
class CallProtocol extends TdObject
{
    public const TYPE_NAME = 'callProtocol';

    /**
     * True, if UDP peer-to-peer connections are supported.
     */
    protected bool $udpP2p;

    /**
     * True, if connection through UDP reflectors is supported.
     */
    protected bool $udpReflector;

    /**
     * The minimum supported API layer; use 65.
     */
    protected int $minLayer;

    /**
     * The maximum supported API layer; use 65.
     */
    protected int $maxLayer;

    public function __construct(bool $udpP2p, bool $udpReflector, int $minLayer, int $maxLayer)
    {
        $this->udpP2p       = $udpP2p;
        $this->udpReflector = $udpReflector;
        $this->minLayer     = $minLayer;
        $this->maxLayer     = $maxLayer;
    }

    public static function fromArray(array $array): CallProtocol
    {
        return new static(
            $array['udp_p2p'],
            $array['udp_reflector'],
            $array['min_layer'],
            $array['max_layer'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'udp_p2p'       => $this->udpP2p,
            'udp_reflector' => $this->udpReflector,
            'min_layer'     => $this->minLayer,
            'max_layer'     => $this->maxLayer,
        ];
    }

    public function getUdpP2p(): bool
    {
        return $this->udpP2p;
    }

    public function getUdpReflector(): bool
    {
        return $this->udpReflector;
    }

    public function getMinLayer(): int
    {
        return $this->minLayer;
    }

    public function getMaxLayer(): int
    {
        return $this->maxLayer;
    }
}
