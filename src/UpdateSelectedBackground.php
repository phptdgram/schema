<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * The selected background has changed.
 */
class UpdateSelectedBackground extends Update
{
    public const TYPE_NAME = 'updateSelectedBackground';

    /**
     * True, if background for dark theme has changed.
     */
    protected bool $forDarkTheme;

    /**
     * The new selected background; may be null.
     */
    protected ?Background $background;

    public function __construct(bool $forDarkTheme, ?Background $background)
    {
        parent::__construct();

        $this->forDarkTheme = $forDarkTheme;
        $this->background   = $background;
    }

    public static function fromArray(array $array): UpdateSelectedBackground
    {
        return new static(
            $array['for_dark_theme'],
            (isset($array['background']) ? TdSchemaRegistry::fromArray($array['background']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'for_dark_theme' => $this->forDarkTheme,
            'background'     => (isset($this->background) ? $this->background : null),
        ];
    }

    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    public function getBackground(): ?Background
    {
        return $this->background;
    }
}
