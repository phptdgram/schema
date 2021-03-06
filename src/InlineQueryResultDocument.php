<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents a document.
 */
class InlineQueryResultDocument extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultDocument';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * Document.
     */
    protected Document $document;

    /**
     * Document title.
     */
    protected string $title;

    /**
     * Document description.
     */
    protected string $description;

    public function __construct(string $id, Document $document, string $title, string $description)
    {
        parent::__construct();

        $this->id          = $id;
        $this->document    = $document;
        $this->title       = $title;
        $this->description = $description;
    }

    public static function fromArray(array $array): InlineQueryResultDocument
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['document']),
            $array['title'],
            $array['description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'document'    => $this->document->typeSerialize(),
            'title'       => $this->title,
            'description' => $this->description,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDocument(): Document
    {
        return $this->document;
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
