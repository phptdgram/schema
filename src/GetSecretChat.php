<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Returns information about a secret chat by its identifier. This is an offline request.
 */
class GetSecretChat extends TdFunction
{
    public const TYPE_NAME = 'getSecretChat';

    /**
     * Secret chat identifier.
     */
    protected int $secretChatId;

    public function __construct(int $secretChatId)
    {
        $this->secretChatId = $secretChatId;
    }

    public static function fromArray(array $array): GetSecretChat
    {
        return new static(
            $array['secret_chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
        ];
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }
}
