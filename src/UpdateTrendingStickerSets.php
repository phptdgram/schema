<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The list of trending sticker sets was updated or some of them were viewed.
 */
class UpdateTrendingStickerSets extends Update
{
    public const TYPE_NAME = 'updateTrendingStickerSets';

    /**
     * The new list of trending sticker sets.
     */
    protected StickerSets $stickerSets;

    public function __construct(StickerSets $stickerSets)
    {
        parent::__construct();

        $this->stickerSets = $stickerSets;
    }

    public static function fromArray(array $array): UpdateTrendingStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_sets']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'sticker_sets' => $this->stickerSets->typeSerialize(),
        ];
    }

    public function getStickerSets(): StickerSets
    {
        return $this->stickerSets;
    }
}
