<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Sends a filled-out payment form to the bot for final verification.
 */
class SendPaymentForm extends TdFunction
{
    public const TYPE_NAME = 'sendPaymentForm';

    /**
     * Chat identifier of the Invoice message.
     */
    protected int $chatId;

    /**
     * Message identifier.
     */
    protected int $messageId;

    /**
     * Identifier returned by ValidateOrderInfo, or an empty string.
     */
    protected string $orderInfoId;

    /**
     * Identifier of a chosen shipping option, if applicable.
     */
    protected string $shippingOptionId;

    /**
     * The credentials chosen by user for payment.
     */
    protected InputCredentials $credentials;

    public function __construct(int $chatId, int $messageId, string $orderInfoId, string $shippingOptionId, InputCredentials $credentials)
    {
        $this->chatId           = $chatId;
        $this->messageId        = $messageId;
        $this->orderInfoId      = $orderInfoId;
        $this->shippingOptionId = $shippingOptionId;
        $this->credentials      = $credentials;
    }

    public static function fromArray(array $array): SendPaymentForm
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['order_info_id'],
            $array['shipping_option_id'],
            TdSchemaRegistry::fromArray($array['credentials']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'message_id'         => $this->messageId,
            'order_info_id'      => $this->orderInfoId,
            'shipping_option_id' => $this->shippingOptionId,
            'credentials'        => $this->credentials->typeSerialize(),
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

    public function getOrderInfoId(): string
    {
        return $this->orderInfoId;
    }

    public function getShippingOptionId(): string
    {
        return $this->shippingOptionId;
    }

    public function getCredentials(): InputCredentials
    {
        return $this->credentials;
    }
}
