<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A simple object containing a sequence of bytes; for testing only.
 */
class TestBytes extends TdObject
{
    public const TYPE_NAME = 'testBytes';

    /**
     * Bytes.
     */
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function fromArray(array $array): TestBytes
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

    public function getValue(): string
    {
        return $this->value;
    }
}
