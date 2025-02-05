<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ChatIdRequiredTrait
{
    /**
     * @var int|string
     */
    protected int|string $chatId;

    /**
     * @param int|string $chatId
     *
     * @return void
     */
    protected function setChatId(int|string $chatId): void
    {
        $this->chatId = $chatId;
    }
}
