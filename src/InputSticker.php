<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Describes a sticker that should be added to a sticker set.
 */
class InputSticker extends TdObject
{
    public const TYPE_NAME = 'inputSticker';

    /**
     * PNG image with the sticker; must be up to 512 kB in size and fit in a 512x512 square.
     */
    protected InputFile $pngSticker;

    /**
     * Emoji corresponding to the sticker.
     */
    protected string $emojis;

    /**
     * For masks, position where the mask should be placed; may be null.
     */
    protected ?MaskPosition $maskPosition;

    public function __construct(InputFile $pngSticker, string $emojis, ?MaskPosition $maskPosition)
    {
        $this->pngSticker   = $pngSticker;
        $this->emojis       = $emojis;
        $this->maskPosition = $maskPosition;
    }

    public static function fromArray(array $array): InputSticker
    {
        return new static(
            TdSchemaRegistry::fromArray($array['png_sticker']),
            $array['emojis'],
            (isset($array['mask_position']) ? TdSchemaRegistry::fromArray($array['mask_position']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'png_sticker'   => $this->pngSticker->typeSerialize(),
            'emojis'        => $this->emojis,
            'mask_position' => (isset($this->maskPosition) ? $this->maskPosition : null),
        ];
    }

    public function getPngSticker(): InputFile
    {
        return $this->pngSticker;
    }

    public function getEmojis(): string
    {
        return $this->emojis;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }
}
