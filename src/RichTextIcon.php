<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A small image inside the text.
 */
class RichTextIcon extends RichText
{
    public const TYPE_NAME = 'richTextIcon';

    /**
     * The image represented as a document. The image can be in GIF, JPEG or PNG format.
     */
    protected Document $document;

    /**
     * Width of a bounding box in which the image should be shown; 0 if unknown.
     */
    protected int $width;

    /**
     * Height of a bounding box in which the image should be shown; 0 if unknown.
     */
    protected int $height;

    public function __construct(Document $document, int $width, int $height)
    {
        parent::__construct();

        $this->document = $document;
        $this->width    = $width;
        $this->height   = $height;
    }

    public static function fromArray(array $array): RichTextIcon
    {
        return new static(
            TdSchemaRegistry::fromArray($array['document']),
            $array['width'],
            $array['height'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'document' => $this->document->typeSerialize(),
            'width'    => $this->width,
            'height'   => $this->height,
        ];
    }

    public function getDocument(): Document
    {
        return $this->document;
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
