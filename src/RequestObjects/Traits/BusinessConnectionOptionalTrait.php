<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait BusinessConnectionOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $businessConnectionId;

    /**
     * @param string|null $businessConnectionId
     *
     * @return void
     */
    public function setBusinessConnectionId(?string $businessConnectionId): void
    {
        $this->businessConnectionId = $businessConnectionId;
    }
}
