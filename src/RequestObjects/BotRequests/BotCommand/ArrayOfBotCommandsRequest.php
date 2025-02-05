<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfBotCommandsRequest extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = BotCommandRequest::class;

    /**
     * @param array $botCommands
     */
    public function __construct(array $botCommands = [])
    {
        foreach ($botCommands as $botCommand) {
            $this->addBotCommand($botCommand);
        }
    }

    /**
     * @return array
     */
    public function getBotCommands(): array
    {
        return $this->items;
    }

    /**
     * @param BotCommandRequest $botCommand
     *
     * @return void
     */
    public function addBotCommand(BotCommandRequest $botCommand): void
    {
        $this->addItem($botCommand);
    }
}
