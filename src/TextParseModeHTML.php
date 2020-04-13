<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The text should be parsed in HTML-style.
 */
class TextParseModeHTML extends TextParseMode
{
    public const TYPE_NAME = 'textParseModeHTML';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextParseModeHTML
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
