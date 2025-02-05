<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BotCommand extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'command' => true,
        'description' => true,
    ];

    /**
     * @var string
     */
    protected string $command;

    /**
     * @var string
     */
    protected string $description;

    protected function setCommand(string $command): void
    {
        $this->command = $command;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
