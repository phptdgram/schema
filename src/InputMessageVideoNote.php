<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A video note message.
 */
class InputMessageVideoNote extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVideoNote';

    /**
     * Video note to be sent.
     */
    protected InputFile $videoNote;

    /**
     * Video thumbnail, if available.
     */
    protected InputThumbnail $thumbnail;

    /**
     * Duration of the video, in seconds.
     */
    protected int $duration;

    /**
     * Video width and height; must be positive and not greater than 640.
     */
    protected int $length;

    public function __construct(InputFile $videoNote, InputThumbnail $thumbnail, int $duration, int $length)
    {
        parent::__construct();

        $this->videoNote = $videoNote;
        $this->thumbnail = $thumbnail;
        $this->duration  = $duration;
        $this->length    = $length;
    }

    public static function fromArray(array $array): InputMessageVideoNote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video_note']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['duration'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'video_note' => $this->videoNote->typeSerialize(),
            'thumbnail'  => $this->thumbnail->typeSerialize(),
            'duration'   => $this->duration,
            'length'     => $this->length,
        ];
    }

    public function getVideoNote(): InputFile
    {
        return $this->videoNote;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
