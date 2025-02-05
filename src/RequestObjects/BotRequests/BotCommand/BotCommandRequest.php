<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;

class BotCommandRequest extends BaseRequestObject
{
    /**
     * @var string
     */
    protected string $command;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @param string $command
     * @param string $description
     */
    public function __construct(
        string $command,
        string $description
    ) {
        $this->setCommand($command);
        $this->setDescription($description);
    }

    /**
     * @param string $command
     *
     * @return void
     */
    protected function setCommand(string $command): void
    {
        $this->command = $command;
    }

    /**
     * @param string $description
     *
     * @return void
     */
    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
