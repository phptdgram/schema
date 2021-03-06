<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a video.
 */
class InlineQueryResultVideo extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultVideo';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Video.
     */
    protected Video $video;

    /**
     * Title of the video.
     */
    protected string $title;

    /**
     * Description of the video.
     */
    protected string $description;

    public function __construct(string $id, Video $video, string $title, string $description)
    {
        parent::__construct();

        $this->id          = $id;
        $this->video       = $video;
        $this->title       = $title;
        $this->description = $description;
    }

    public static function fromArray(array $array): InlineQueryResultVideo
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['video']),
            $array['title'],
            $array['description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'video'       => $this->video->typeSerialize(),
            'title'       => $this->title,
            'description' => $this->description,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
