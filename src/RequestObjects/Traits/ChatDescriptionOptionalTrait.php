<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait ChatDescriptionOptionalTrait
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
        if ($description !== null) {
            if (mb_strlen($description) > 255) {
                throw new TelegramBotApiException('Description of chat must less than 255 characters');
            }
        }
        $this->description = $description;
    }
}
