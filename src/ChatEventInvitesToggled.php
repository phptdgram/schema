<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The can_invite_users permission of a supergroup chat was toggled.
 */
class ChatEventInvitesToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventInvitesToggled';

    /**
     * New value of can_invite_users permission.
     */
    protected bool $canInviteUsers;

    public function __construct(bool $canInviteUsers)
    {
        parent::__construct();

        $this->canInviteUsers = $canInviteUsers;
    }

    public static function fromArray(array $array): ChatEventInvitesToggled
    {
        return new static(
            $array['can_invite_users'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'can_invite_users' => $this->canInviteUsers,
        ];
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }
}
