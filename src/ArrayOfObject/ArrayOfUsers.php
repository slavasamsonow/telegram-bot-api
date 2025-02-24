<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\User;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfUsers extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = User::class;

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->items;
    }
}
