<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Returns the current authorization state; this is an offline request. For informational purposes only. Use updateAuthorizationState instead to maintain the current authorization state.
 */
class GetAuthorizationState extends TdFunction
{
    public const TYPE_NAME = 'getAuthorizationState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetAuthorizationState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
