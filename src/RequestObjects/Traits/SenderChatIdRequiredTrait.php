<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SenderChatIdRequiredTrait
{
    /**
     * @var int
     */
    protected int $senderChatId;

    /**
     * @param int $senderChatId
     *
     * @return void
     */
    protected function setSenderChatId(int $senderChatId): void
    {
        $this->senderChatId = $senderChatId;
    }
}
