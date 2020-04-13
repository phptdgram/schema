<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * New message was received through a push notification.
 */
class NotificationTypeNewPushMessage extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewPushMessage';

    /**
     * The message identifier. The message will not be available in the chat history, but the ID can be used in viewMessages and as reply_to_message_id.
     */
    protected int $messageId;

    /**
     * Sender of the message. Corresponding user may be inaccessible.
     */
    protected int $senderUserId;

    /**
     * Push message content.
     */
    protected PushMessageContent $content;

    public function __construct(int $messageId, int $senderUserId, PushMessageContent $content)
    {
        parent::__construct();

        $this->messageId    = $messageId;
        $this->senderUserId = $senderUserId;
        $this->content      = $content;
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            $array['message_id'],
            $array['sender_user_id'],
            TdSchemaRegistry::fromArray($array['content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'message_id'     => $this->messageId,
            'sender_user_id' => $this->senderUserId,
            'content'        => $this->content->typeSerialize(),
        ];
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getContent(): PushMessageContent
    {
        return $this->content;
    }
}
