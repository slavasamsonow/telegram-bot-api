<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait MessageThreadIdOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $messageThreadId;

    /**
     * @param int|null $messageThreadId
     *
     * @return void
     */
    public function setMessageThreadId(?int $messageThreadId): void
    {
        $this->messageThreadId = $messageThreadId;
    }
}
