<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class Birthdate extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'day' => true,
        'month' => true,
        'year' => true,
    ];

    /**
     * @var int
     */
    public readonly int $day;

    /**
     * @var int
     */
    public readonly int $month;

    /**
     * @var int|null
     */
    public readonly ?int $year;


    /**
     * @param int $day
     *
     * @return void
     */
    protected function setDay(int $day): void
    {
        $this->day = $day;
    }

    /**
     * @return int
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * @param int $month
     *
     * @return void
     */
    protected function setMonth(int $month): void
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * @param int|null $year
     *
     * @return void
     */
    protected function setYear(?int $year): void
    {
        $this->year = $year;
    }

    /**
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
}
