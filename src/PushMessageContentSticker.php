<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A message with a sticker.
 */
class PushMessageContentSticker extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentSticker';

    /**
     * Message content; may be null.
     */
    protected ?Sticker $sticker;

    /**
     * Emoji corresponding to the sticker; may be empty.
     */
    protected string $emoji;

    /**
     * True, if the message is a pinned message with the specified content.
     */
    protected bool $isPinned;

    public function __construct(?Sticker $sticker, string $emoji, bool $isPinned)
    {
        parent::__construct();

        $this->sticker  = $sticker;
        $this->emoji    = $emoji;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentSticker
    {
        return new static(
            (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            $array['emoji'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'sticker'   => (isset($this->sticker) ? $this->sticker : null),
            'emoji'     => $this->emoji,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
