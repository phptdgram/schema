<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A rich text anchor.
 */
class RichTextAnchor extends RichText
{
    public const TYPE_NAME = 'richTextAnchor';

    /**
     * Text.
     */
    protected RichText $text;

    /**
     * Anchor name.
     */
    protected string $name;

    public function __construct(RichText $text, string $name)
    {
        parent::__construct();

        $this->text = $text;
        $this->name = $name;
    }

    public static function fromArray(array $array): RichTextAnchor
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text->typeSerialize(),
            'name'  => $this->name,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
