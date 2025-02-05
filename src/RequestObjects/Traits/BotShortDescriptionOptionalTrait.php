<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait BotShortDescriptionOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $shortDescription;

    /**
     * @param string|null $shortDescription
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setShortDescription(?string $shortDescription): void
    {
        if ($shortDescription != null && mb_strlen($shortDescription) > 120) {
            throw new TelegramBotApiException('Bot name is less than 512 characters');
        }
        $this->shortDescription = $shortDescription;
    }
}
