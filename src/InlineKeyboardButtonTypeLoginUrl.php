<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * A button that opens a specified URL and automatically logs in in current user if they allowed to do that.
 */
class InlineKeyboardButtonTypeLoginUrl extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeLoginUrl';

    /**
     * An HTTP URL to open.
     */
    protected string $url;

    /**
     * Unique button identifier.
     */
    protected int $id;

    /**
     * If non-empty, new text of the button in forwarded messages.
     */
    protected string $forwardText;

    public function __construct(string $url, int $id, string $forwardText)
    {
        parent::__construct();

        $this->url         = $url;
        $this->id          = $id;
        $this->forwardText = $forwardText;
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeLoginUrl
    {
        return new static(
            $array['url'],
            $array['id'],
            $array['forward_text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'url'          => $this->url,
            'id'           => $this->id,
            'forward_text' => $this->forwardText,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getForwardText(): string
    {
        return $this->forwardText;
    }
}
