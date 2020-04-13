<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents an integer option.
 */
class OptionValueInteger extends OptionValue
{
    public const TYPE_NAME = 'optionValueInteger';

    /**
     * The value of the option.
     */
    protected int $value;

    public function __construct(int $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): OptionValueInteger
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

    public function getValue(): int
    {
        return $this->value;
    }
}
