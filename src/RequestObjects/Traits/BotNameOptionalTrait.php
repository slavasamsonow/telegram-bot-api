<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait BotNameOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $name;

    /**
     * @param string|null $name
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setName(?string $name): void
    {
        if ($name != null && mb_strlen($name) > 65) {
            throw new TelegramBotApiException('Bot name is less than 64 characters');
        }
        $this->name = $name;
    }
}
