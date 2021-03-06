<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Returns information about a message that is replied by given message.
 */
class GetRepliedMessage extends TdFunction
{
    public const TYPE_NAME = 'getRepliedMessage';

    /**
     * Identifier of the chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Identifier of the message reply to which get.
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        $this->chatId    = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): GetRepliedMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
