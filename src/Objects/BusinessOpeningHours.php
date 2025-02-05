<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfOpeningHours;

class BusinessOpeningHours extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'time_zone_name' => true,
        'opening_hours' => ArrayOfOpeningHours::class,
    ];

    /**
     * @var string
     */
    protected string $timeZoneName;

    /**
     * @var ArrayOfOpeningHours
     */
    protected ArrayOfOpeningHours $openingHours;

    /**
     * @param string $timeZoneName
     *
     * @return void
     */
    protected function setTimeZoneName(string $timeZoneName): void
    {
        $this->timeZoneName = $timeZoneName;
    }

    /**
     * @return string
     */
    public function getTimeZoneName(): string
    {
        return $this->timeZoneName;
    }

    /**
     * @param ArrayOfOpeningHours $openingHours
     *
     * @return void
     */
    protected function setOpeningHours(ArrayOfOpeningHours $openingHours): void
    {
        $this->openingHours = $openingHours;
    }

    /**
     * @return ArrayOfOpeningHours
     */
    public function getOpeningHours(): ArrayOfOpeningHours
    {
        return $this->openingHours;
    }
}
