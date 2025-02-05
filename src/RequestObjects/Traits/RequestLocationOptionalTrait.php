<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RequestLocationOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $requestLocation;

    /**
     * @param bool $requestLocation
     *
     * @return void
     */
    public function setRequestLocation(bool $requestLocation): void
    {
        $this->requestLocation = $requestLocation;
    }
}
