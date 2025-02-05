<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait CallbackDataOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $callbackData;

    /**
     * @param string $callbackData
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setCallbackData(string $callbackData): void
    {
        $length = strlen($callbackData);
        if ($length < 1) {
            throw new TelegramBotApiException('Button callback data must be longer then 1 character');
        } elseif ($length > 64) {
            throw new TelegramBotApiException('Button callback data must be less then 64 character');
        }

        $this->callbackData = $callbackData;
    }
}
