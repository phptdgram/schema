<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a single button in an inline keyboard.
 */
class InlineKeyboardButton extends TdObject
{
    public const TYPE_NAME = 'inlineKeyboardButton';

    /**
     * Text of the button.
     */
    protected string $text;

    /**
     * Type of the button.
     */
    protected InlineKeyboardButtonType $type;

    public function __construct(string $text, InlineKeyboardButtonType $type)
    {
        $this->text = $text;
        $this->type = $type;
    }

    public static function fromArray(array $array): InlineKeyboardButton
    {
        return new static(
            $array['text'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): InlineKeyboardButtonType
    {
        return $this->type;
    }
}
