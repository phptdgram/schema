<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Deletes a Telegram Passport element.
 */
class DeletePassportElement extends TdFunction
{
    public const TYPE_NAME = 'deletePassportElement';

    /**
     * Element type.
     */
    protected PassportElementType $type;

    public function __construct(PassportElementType $type)
    {
        $this->type = $type;
    }

    public static function fromArray(array $array): DeletePassportElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }
}
