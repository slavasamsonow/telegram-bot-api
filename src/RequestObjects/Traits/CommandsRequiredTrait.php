<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\ArrayOfBotCommandsRequest;

trait CommandsRequiredTrait
{
    /**
     * @var ArrayOfBotCommandsRequest
     */
    protected ArrayOfBotCommandsRequest $commands;

    /**
     * @param ArrayOfBotCommandsRequest $commands
     *
     * @return void
     */
    protected function setCommands(ArrayOfBotCommandsRequest $commands): void
    {
        $this->commands = $commands;
    }
}
