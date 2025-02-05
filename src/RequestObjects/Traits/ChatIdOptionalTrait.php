<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ChatIdOptionalTrait
{
    /**
     * @var int|string|null
     */
    protected null|int|string $chatId;

    /**
     * @param int|string|null $chatId
     *
     * @return void
     */
    public function setChatId(null|int|string $chatId): void
    {
        $this->chatId = $chatId;
    }
}
