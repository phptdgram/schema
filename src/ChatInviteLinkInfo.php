<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Contains information about a chat invite link.
 */
class ChatInviteLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkInfo';

    /**
     * Chat identifier of the invite link; 0 if the user is not a member of this chat.
     */
    protected int $chatId;

    /**
     * Contains information about the type of the chat.
     */
    protected ChatType $type;

    /**
     * Title of the chat.
     */
    protected string $title;

    /**
     * Chat photo; may be null.
     */
    protected ?ChatPhoto $photo;

    /**
     * Number of members.
     */
    protected int $memberCount;

    /**
     * User identifiers of some chat members that may be known to the current user.
     *
     * @var int[]
     */
    protected array $memberUserIds;

    /**
     * True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup.
     */
    protected bool $isPublic;

    public function __construct(int $chatId, ChatType $type, string $title, ?ChatPhoto $photo, int $memberCount, array $memberUserIds, bool $isPublic)
    {
        $this->chatId        = $chatId;
        $this->type          = $type;
        $this->title         = $title;
        $this->photo         = $photo;
        $this->memberCount   = $memberCount;
        $this->memberUserIds = $memberUserIds;
        $this->isPublic      = $isPublic;
    }

    public static function fromArray(array $array): ChatInviteLinkInfo
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['member_count'],
            $array['member_user_ids'],
            $array['is_public'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'type'            => $this->type->typeSerialize(),
            'title'           => $this->title,
            'photo'           => (isset($this->photo) ? $this->photo : null),
            'member_count'    => $this->memberCount,
            'member_user_ids' => $this->memberUserIds,
            'is_public'       => $this->isPublic,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getType(): ChatType
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
}
