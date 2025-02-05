<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RequestUsernameOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $requestUsername;

    /**
     * @param bool|null $requestUsername
     *
     * @return void
     */
    public function setRequestUsername(?bool $requestUsername): void
    {
        $this->requestUsername = $requestUsername;
    }
}
