<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A photo message.
 */
class MessagePhoto extends MessageContent
{
    public const TYPE_NAME = 'messagePhoto';

    /**
     * The photo description.
     */
    protected Photo $photo;

    /**
     * Photo caption.
     */
    protected FormattedText $caption;

    /**
     * True, if the photo must be blurred and must be shown only while tapped.
     */
    protected bool $isSecret;

    public function __construct(Photo $photo, FormattedText $caption, bool $isSecret)
    {
        parent::__construct();

        $this->photo    = $photo;
        $this->caption  = $caption;
        $this->isSecret = $isSecret;
    }

    public static function fromArray(array $array): MessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['is_secret'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'photo'     => $this->photo->typeSerialize(),
            'caption'   => $this->caption->typeSerialize(),
            'is_secret' => $this->isSecret,
        ];
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }
}
