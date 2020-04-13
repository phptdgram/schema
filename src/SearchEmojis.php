<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Searches for emojis by keywords. Supported only if the file database is enabled.
 */
class SearchEmojis extends TdFunction
{
    public const TYPE_NAME = 'searchEmojis';

    /**
     * Text to search for.
     */
    protected string $text;

    /**
     * True, if only emojis, which exactly match text needs to be returned.
     */
    protected bool $exactMatch;

    /**
     * IETF language tag of the user's input language; may be empty if unknown.
     */
    protected string $inputLanguageCode;

    public function __construct(string $text, bool $exactMatch, string $inputLanguageCode)
    {
        $this->text              = $text;
        $this->exactMatch        = $exactMatch;
        $this->inputLanguageCode = $inputLanguageCode;
    }

    public static function fromArray(array $array): SearchEmojis
    {
        return new static(
            $array['text'],
            $array['exact_match'],
            $array['input_language_code'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'text'                => $this->text,
            'exact_match'         => $this->exactMatch,
            'input_language_code' => $this->inputLanguageCode,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getExactMatch(): bool
    {
        return $this->exactMatch;
    }

    public function getInputLanguageCode(): string
    {
        return $this->inputLanguageCode;
    }
}
