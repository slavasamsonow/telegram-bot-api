<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\ReactionType;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfReactionTypes extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = ReactionType::class;

    /**
     * @return array
     */
    public function getReactionTypes(): array
    {
        return $this->items;
    }
}
