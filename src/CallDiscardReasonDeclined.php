<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The call was ended before the conversation started. It was declined by the other party.
 */
class CallDiscardReasonDeclined extends CallDiscardReason
{
    public const TYPE_NAME = 'callDiscardReasonDeclined';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallDiscardReasonDeclined
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
