<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Some data from userFullInfo has been changed.
 */
class UpdateUserFullInfo extends Update
{
    public const TYPE_NAME = 'updateUserFullInfo';

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * New full information about the user.
     */
    protected UserFullInfo $userFullInfo;

    public function __construct(int $userId, UserFullInfo $userFullInfo)
    {
        parent::__construct();

        $this->userId       = $userId;
        $this->userFullInfo = $userFullInfo;
    }

    public static function fromArray(array $array): UpdateUserFullInfo
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['user_full_info']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'user_id'        => $this->userId,
            'user_full_info' => $this->userFullInfo->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUserFullInfo(): UserFullInfo
    {
        return $this->userFullInfo;
    }
}
