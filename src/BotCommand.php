<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace PHPTdGram\Schema;

/**
 * Represents commands supported by a bot.
 */
class BotCommand extends TdObject
{
    public const TYPE_NAME = 'botCommand';

    /**
     * Text of the bot command.
     */
    protected string $command;

    /**
     * Description of the bot command.
     */
    protected string $description;

    public function __construct(string $command, string $description)
    {
        $this->command     = $command;
        $this->description = $description;
    }

    public static function fromArray(array $array): BotCommand
    {
        return new static(
            $array['command'],
            $array['description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'command'     => $this->command,
            'description' => $this->description,
        ];
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
