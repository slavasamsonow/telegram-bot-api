<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\WebAppInfo;

trait WebAppOptionalTrait
{
    /**
     * @var WebAppInfo|null
     */
    protected ?WebAppInfo $webApp;


    /**
     * @param WebAppInfo|null $webApp
     *
     * @return void
     */
    protected function setWebApp(?WebAppInfo $webApp): void
    {
        $this->webApp = $webApp;
    }
}
