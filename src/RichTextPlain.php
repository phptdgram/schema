<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A plain text.
 */
class RichTextPlain extends RichText
{
    public const TYPE_NAME = 'richTextPlain';

    /**
     * Text.
     */
    protected string $text;

    public function __construct(string $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): RichTextPlain
    {
        return new static(
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }
}
