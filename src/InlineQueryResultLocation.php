<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a point on the map.
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultLocation';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Location result.
     */
    protected Location $location;

    /**
     * Title of the result.
     */
    protected string $title;

    /**
     * Result thumbnail; may be null.
     */
    protected ?PhotoSize $thumbnail;

    public function __construct(string $id, Location $location, string $title, ?PhotoSize $thumbnail)
    {
        parent::__construct();

        $this->id        = $id;
        $this->location  = $location;
        $this->title     = $title;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultLocation
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['location']),
            $array['title'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'location'  => $this->location->typeSerialize(),
            'title'     => $this->title,
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }
}
