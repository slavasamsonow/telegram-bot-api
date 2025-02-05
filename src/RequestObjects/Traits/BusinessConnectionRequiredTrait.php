<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait BusinessConnectionRequiredTrait
{
    /**
     * @var string
     */
    protected string $businessConnectionId;

    /**
     * @param string $businessConnectionId
     *
     * @return void
     */
    protected function setBusinessConnectionId(string $businessConnectionId): void
    {
        $this->businessConnectionId = $businessConnectionId;
    }
}
