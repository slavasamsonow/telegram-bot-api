<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait UrlRequiredTrait
{
    /**
     * @var string
     */
    protected string $url;

    /**
     * @param $url
     *
     * @return void
     * @throws TelegramBotApiException
     */
    private function setUrl($url): void
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new TelegramBotApiException('Button url is not url');
        }
        $this->url = $url;
    }
}
