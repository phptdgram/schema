<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A sticker message.
 */
class InputMessageSticker extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageSticker';

    /**
     * Sticker to be sent.
     */
    protected InputFile $sticker;

    /**
     * Sticker thumbnail, if available.
     */
    protected InputThumbnail $thumbnail;

    /**
     * Sticker width.
     */
    protected int $width;

    /**
     * Sticker height.
     */
    protected int $height;

    public function __construct(InputFile $sticker, InputThumbnail $thumbnail, int $width, int $height)
    {
        parent::__construct();

        $this->sticker   = $sticker;
        $this->thumbnail = $thumbnail;
        $this->width     = $width;
        $this->height    = $height;
    }

    public static function fromArray(array $array): InputMessageSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['width'],
            $array['height'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'sticker'   => $this->sticker->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'width'     => $this->width,
            'height'    => $this->height,
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
