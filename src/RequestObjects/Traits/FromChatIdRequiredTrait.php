<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait FromChatIdRequiredTrait
{
    /**
     * @var int|string
     */
    protected int|string $fromChatId;

    /**
     * @param int|string $fromChatId
     *
     * @return void
     */
    protected function setFromChatId(int|string $fromChatId): void
    {
        $this->fromChatId = $fromChatId;
    }
}
