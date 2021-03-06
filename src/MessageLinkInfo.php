<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Contains information about a link to a message in a chat.
 */
class MessageLinkInfo extends TdObject
{
    public const TYPE_NAME = 'messageLinkInfo';

    /**
     * True, if the link is a public link for a message in a chat.
     */
    protected bool $isPublic;

    /**
     * If found, identifier of the chat to which the message belongs, 0 otherwise.
     */
    protected int $chatId;

    /**
     * If found, the linked message; may be null.
     */
    protected ?Message $message;

    /**
     * True, if the whole media album to which the message belongs is linked.
     */
    protected bool $forAlbum;

    public function __construct(bool $isPublic, int $chatId, ?Message $message, bool $forAlbum)
    {
        $this->isPublic = $isPublic;
        $this->chatId   = $chatId;
        $this->message  = $message;
        $this->forAlbum = $forAlbum;
    }

    public static function fromArray(array $array): MessageLinkInfo
    {
        return new static(
            $array['is_public'],
            $array['chat_id'],
            (isset($array['message']) ? TdSchemaRegistry::fromArray($array['message']) : null),
            $array['for_album'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'chat_id'   => $this->chatId,
            'message'   => (isset($this->message) ? $this->message : null),
            'for_album' => $this->forAlbum,
        ];
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }
}
