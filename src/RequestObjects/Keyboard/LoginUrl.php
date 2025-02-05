<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LoginUrlTrait;

class LoginUrl
{
    use LoginUrlTrait;

    /**
     * @param string $url
     * @param string|null $forwardText
     * @param string|null $botUsername
     * @param bool|null $requestWriteAccess
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        string $url,
        ?string $forwardText = null,
        ?string $botUsername = null,
        ?bool $requestWriteAccess = null,
    ) {
        try {
            $this->setUrl($url);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create Login url', $e->getCode(), $e);
        }
        $this->setForwardText($forwardText);
        $this->setBotUsername($botUsername);
        $this->setRequestWriteAccess($requestWriteAccess);
    }
}
