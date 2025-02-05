<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatSenderRequestTrait;

class UnbanChatSenderChatRequest extends BaseRequestObject
{
    use ChatSenderRequestTrait;

    /**
     * @param int|string $chatId
     * @param int $senderChatId
     */
    public function __construct(
        int|string $chatId,
        int $senderChatId
    ) {
        $this->setChatId($chatId);
        $this->setSenderChatId($senderChatId);
    }
}
