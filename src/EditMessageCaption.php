<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Edits the message content caption. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editMessageCaption';

    /**
     * The chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New message content caption; 0-GetOption("message_caption_length_max") characters.
     */
    protected FormattedText $caption;

    public function __construct(int $chatId, int $messageId, ReplyMarkup $replyMarkup, FormattedText $caption)
    {
        $this->chatId      = $chatId;
        $this->messageId   = $messageId;
        $this->replyMarkup = $replyMarkup;
        $this->caption     = $caption;
    }

    public static function fromArray(array $array): EditMessageCaption
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'caption'      => $this->caption->typeSerialize(),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
