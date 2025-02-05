<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\Message;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfMessages extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = Message::class;

    /**
     * @param Message $message
     *
     * @return void
     */
    public function addMessage(Message $message): void
    {
        $this->addItem($message);
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->items;
    }
}
