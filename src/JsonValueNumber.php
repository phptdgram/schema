<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a numeric JSON value.
 */
class JsonValueNumber extends JsonValue
{
    public const TYPE_NAME = 'jsonValueNumber';

    /**
     * The value.
     */
    protected float $value;

    public function __construct(float $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): JsonValueNumber
    {
        return new static(
            $array['value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
