<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a special kind of a supergroup: only administrators can post and see the list of members, and posts from all administrators use the name and photo of the channel instead of individual names and profile photos. Unlike supergroups, channels can have an unlimited number of subscribers.
 */
class Supergroup extends TdObject
{
    public const TYPE_NAME = 'supergroup';

    /**
     * Supergroup or channel identifier.
     */
    protected int $id;

    /**
     * Username of the supergroup or channel; empty for private supergroups or channels.
     */
    protected string $username;

    /**
     * Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member.
     */
    protected int $date;

    /**
     * Status of the current user in the supergroup or channel; custom title will be always empty.
     */
    protected ChatMemberStatus $status;

    /**
     * Member count; 0 if unknown. Currently it is guaranteed to be known only if the supergroup or channel was found through SearchPublicChats.
     */
    protected int $memberCount;

    /**
     * True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel.
     */
    protected bool $hasLinkedChat;

    /**
     * True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup.
     */
    protected bool $hasLocation;

    /**
     * True, if messages sent to the channel should contain information about the sender. This field is only applicable to channels.
     */
    protected bool $signMessages;

    /**
     * True, if the slow mode is enabled in the supergroup.
     */
    protected bool $isSlowModeEnabled;

    /**
     * True, if the supergroup is a channel.
     */
    protected bool $isChannel;

    /**
     * True, if the supergroup or channel is verified.
     */
    protected bool $isVerified;

    /**
     * If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted.
     */
    protected string $restrictionReason;

    /**
     * True, if many users reported this supergroup as a scam.
     */
    protected bool $isScam;

    public function __construct(
        int $id,
        string $username,
        int $date,
        ChatMemberStatus $status,
        int $memberCount,
        bool $hasLinkedChat,
        bool $hasLocation,
        bool $signMessages,
        bool $isSlowModeEnabled,
        bool $isChannel,
        bool $isVerified,
        string $restrictionReason,
        bool $isScam
    ) {
        $this->id                = $id;
        $this->username          = $username;
        $this->date              = $date;
        $this->status            = $status;
        $this->memberCount       = $memberCount;
        $this->hasLinkedChat     = $hasLinkedChat;
        $this->hasLocation       = $hasLocation;
        $this->signMessages      = $signMessages;
        $this->isSlowModeEnabled = $isSlowModeEnabled;
        $this->isChannel         = $isChannel;
        $this->isVerified        = $isVerified;
        $this->restrictionReason = $restrictionReason;
        $this->isScam            = $isScam;
    }

    public static function fromArray(array $array): Supergroup
    {
        return new static(
            $array['id'],
            $array['username'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['member_count'],
            $array['has_linked_chat'],
            $array['has_location'],
            $array['sign_messages'],
            $array['is_slow_mode_enabled'],
            $array['is_channel'],
            $array['is_verified'],
            $array['restriction_reason'],
            $array['is_scam'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'id'                   => $this->id,
            'username'             => $this->username,
            'date'                 => $this->date,
            'status'               => $this->status->typeSerialize(),
            'member_count'         => $this->memberCount,
            'has_linked_chat'      => $this->hasLinkedChat,
            'has_location'         => $this->hasLocation,
            'sign_messages'        => $this->signMessages,
            'is_slow_mode_enabled' => $this->isSlowModeEnabled,
            'is_channel'           => $this->isChannel,
            'is_verified'          => $this->isVerified,
            'restriction_reason'   => $this->restrictionReason,
            'is_scam'              => $this->isScam,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }
}
