<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait MessageIdRequiredTrait
{
    /**
     * @var int
     */
    protected int $messageId;

    /**
     * @param int $messageId
     *
     * @return void
     */
    protected function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }
}
