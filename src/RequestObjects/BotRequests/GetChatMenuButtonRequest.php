<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UserChatIdOptionalTrait;

class GetChatMenuButtonRequest extends BaseRequestObject
{
    use UserChatIdOptionalTrait;

    /**
     * @param int|null $chatId
     */
    public function __construct(
        ?int $chatId = null,
    ) {
        $this->setChatId($chatId);
    }
}
