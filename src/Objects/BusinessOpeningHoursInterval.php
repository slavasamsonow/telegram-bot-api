<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BusinessOpeningHoursInterval
{
    /**
     * @var array
     */
    protected static array $map = [
        'opening_minute' => true,
        'closing_minute' => true,
    ];

    /**
     * @var int
     */
    public readonly int $openingMinute;

    /**
     * @var int
     */
    public readonly int $closingMinute;


    /**
     * @param int $openingMinute
     *
     * @return void
     */
    protected function setOpeningMinute(int $openingMinute): void
    {
        $this->openingMinute = $openingMinute;
    }

    /**
     * @return int
     */
    public function getOpeningMinute(): int
    {
        return $this->openingMinute;
    }

    /**
     * @param int $closingMinute
     *
     * @return void
     */
    protected function setClosingMinute(int $closingMinute): void
    {
        $this->closingMinute = $closingMinute;
    }

    /**
     * @return int
     */
    public function getClosingMinute(): int
    {
        return $this->closingMinute;
    }
}
