<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;

class GetChatMemberRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     */
    public function __construct(
        int|string $chatId,
        int $userId,
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
    }
}
