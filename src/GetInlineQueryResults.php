<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Sends an inline query to a bot and returns its results. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires.
 */
class GetInlineQueryResults extends TdFunction
{
    public const TYPE_NAME = 'getInlineQueryResults';

    /**
     * The identifier of the target bot.
     */
    protected int $botUserId;

    /**
     * Identifier of the chat where the query was sent.
     */
    protected int $chatId;

    /**
     * Location of the user, only if needed.
     */
    protected Location $userLocation;

    /**
     * Text of the query.
     */
    protected string $query;

    /**
     * Offset of the first entry to return.
     */
    protected string $offset;

    public function __construct(int $botUserId, int $chatId, Location $userLocation, string $query, string $offset)
    {
        $this->botUserId    = $botUserId;
        $this->chatId       = $chatId;
        $this->userLocation = $userLocation;
        $this->query        = $query;
        $this->offset       = $offset;
    }

    public static function fromArray(array $array): GetInlineQueryResults
    {
        return new static(
            $array['bot_user_id'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['user_location']),
            $array['query'],
            $array['offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'bot_user_id'   => $this->botUserId,
            'chat_id'       => $this->chatId,
            'user_location' => $this->userLocation->typeSerialize(),
            'query'         => $this->query,
            'offset'        => $this->offset,
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserLocation(): Location
    {
        return $this->userLocation;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }
}
