<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The user was banned (and hence is not a member of the chat). Implies the user can't return to the chat or view messages.
 */
class ChatMemberStatusBanned extends ChatMemberStatus
{
    public const TYPE_NAME = 'chatMemberStatusBanned';

    /**
     * Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever.
     */
    protected int $bannedUntilDate;

    public function __construct(int $bannedUntilDate)
    {
        parent::__construct();

        $this->bannedUntilDate = $bannedUntilDate;
    }

    public static function fromArray(array $array): ChatMemberStatusBanned
    {
        return new static(
            $array['banned_until_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'banned_until_date' => $this->bannedUntilDate,
        ];
    }

    public function getBannedUntilDate(): int
    {
        return $this->bannedUntilDate;
    }
}
