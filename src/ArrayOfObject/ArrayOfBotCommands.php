<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\BotCommand;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfBotCommands extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = BotCommand::class;

    /**
     * @return array
     */
    public function getCommands(): array
    {
        return $this->items;
    }
}