<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a null JSON value.
 */
class JsonValueNull extends JsonValue
{
    public const TYPE_NAME = 'jsonValueNull';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueNull
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
