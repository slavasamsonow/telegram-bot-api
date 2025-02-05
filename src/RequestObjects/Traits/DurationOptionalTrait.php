<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait DurationOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $duration;

    /**
     * @param int|null $duration
     *
     * @return void
     */
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }
}
