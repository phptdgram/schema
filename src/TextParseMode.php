<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Describes the way the text should be parsed for TextEntities.
 */
class TextParseMode extends TdObject
{
    public const TYPE_NAME = 'TextParseMode';

    public function __construct()
    {
    }

    public static function fromArray(array $array): TextParseMode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
