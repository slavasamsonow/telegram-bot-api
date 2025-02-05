<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\BusinessOpeningHoursInterval;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfOpeningHours extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = BusinessOpeningHoursInterval::class;

    /**
     * @return array
     */
    public function getOpeningHours(): array
    {
        return $this->items;
    }
}
