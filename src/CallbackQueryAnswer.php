<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Contains a bot's answer to a callback query.
 */
class CallbackQueryAnswer extends TdObject
{
    public const TYPE_NAME = 'callbackQueryAnswer';

    /**
     * Text of the answer.
     */
    protected string $text;

    /**
     * True, if an alert should be shown to the user instead of a toast notification.
     */
    protected bool $showAlert;

    /**
     * URL to be opened.
     */
    protected string $url;

    public function __construct(string $text, bool $showAlert, string $url)
    {
        $this->text      = $text;
        $this->showAlert = $showAlert;
        $this->url       = $url;
    }

    public static function fromArray(array $array): CallbackQueryAnswer
    {
        return new static(
            $array['text'],
            $array['show_alert'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'text'       => $this->text,
            'show_alert' => $this->showAlert,
            'url'        => $this->url,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getShowAlert(): bool
    {
        return $this->showAlert;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
