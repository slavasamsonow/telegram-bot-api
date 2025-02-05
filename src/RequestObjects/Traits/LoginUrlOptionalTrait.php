<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\LoginUrl;

trait LoginUrlOptionalTrait
{
    /**
     * @var LoginUrl|null
     */
    protected ?LoginUrl $loginUrl;

    /**
     * @param LoginUrl $loginUrl
     *
     * @return void
     */
    protected function setLoginUrl(LoginUrl $loginUrl): void
    {
        $this->loginUrl = $loginUrl;
    }
}
