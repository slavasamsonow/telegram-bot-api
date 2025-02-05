<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait BotDescriptionOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $description;

    /**
     * @param string|null $description
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setDescription(?string $description): void
    {
        if ($description != null && mb_strlen($description) > 512) {
            throw new TelegramBotApiException('Bot name is less than 512 characters');
        }
        $this->description = $description;
    }
}
