<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait UserChatIdOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $chatId;

    /**
     * @param int|null $chatId
     *
     * @return void
     */
    public function setChatId(?int $chatId): void
    {
        $this->chatId = $chatId;
    }
}
