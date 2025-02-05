<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RequestContactOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $requestContact;

    /**
     * @param bool $requestContact
     *
     * @return void
     */
    public function setRequestContact(bool $requestContact): void
    {
        $this->requestContact = $requestContact;
    }
}
