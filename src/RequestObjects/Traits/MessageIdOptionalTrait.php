<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait MessageIdOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $messageId;

    /**
     * @param int|null $messageId
     *
     * @return void
     */
    public function setMessageId(?int $messageId): void
    {
        $this->messageId = $messageId;
    }
}
