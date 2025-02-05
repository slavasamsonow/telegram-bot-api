<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait UrlOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $url;

    /**
     * @param string|null $url
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setUrl(?string $url): void
    {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new TelegramBotApiException('Url is not url');
        }
        $this->url = $url;
    }
}
