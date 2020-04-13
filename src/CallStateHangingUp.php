<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The call is hanging up after discardCall has been called.
 */
class CallStateHangingUp extends CallState
{
    public const TYPE_NAME = 'callStateHangingUp';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateHangingUp
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
