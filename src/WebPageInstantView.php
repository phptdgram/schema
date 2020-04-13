<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Describes an instant view page for a web page.
 */
class WebPageInstantView extends TdObject
{
    public const TYPE_NAME = 'webPageInstantView';

    /**
     * Content of the web page.
     *
     * @var PageBlock[]
     */
    protected array $pageBlocks;

    /**
     * Version of the instant view, currently can be 1 or 2.
     */
    protected int $version;

    /**
     * Instant view URL; may be different from WebPage.url and must be used for the correct anchors handling.
     */
    protected string $url;

    /**
     * True, if the instant view must be shown from right to left.
     */
    protected bool $isRtl;

    /**
     * True, if the instant view contains the full page. A network request might be needed to get the full web page instant view.
     */
    protected bool $isFull;

    public function __construct(array $pageBlocks, int $version, string $url, bool $isRtl, bool $isFull)
    {
        $this->pageBlocks = $pageBlocks;
        $this->version    = $version;
        $this->url        = $url;
        $this->isRtl      = $isRtl;
        $this->isFull     = $isFull;
    }

    public static function fromArray(array $array): WebPageInstantView
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['pageBlocks']),
            $array['version'],
            $array['url'],
            $array['is_rtl'],
            $array['is_full'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->pageBlocks),
            'version'         => $this->version,
            'url'             => $this->url,
            'is_rtl'          => $this->isRtl,
            'is_full'         => $this->isFull,
        ];
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getIsFull(): bool
    {
        return $this->isFull;
    }
}
