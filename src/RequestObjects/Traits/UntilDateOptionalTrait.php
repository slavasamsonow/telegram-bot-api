<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait UntilDateOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $untilDate;

    /**
     * @param int|null $untilDate
     *
     * @return void
     */
    public function setUntilDate(?int $untilDate): void
    {
        $this->untilDate = $untilDate;
    }
}
