<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UrlRequiredTrait;

class WebAppInfo extends BaseRequestObject
{
    use UrlRequiredTrait;

    /**
     * @param string $url
     *
     * @throws TelegramBotApiException
     */
    public function __construct(string $url)
    {
        try {
            $this->setUrl($url);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create web app info', $e->getCode(), $e);
        }
    }
}
