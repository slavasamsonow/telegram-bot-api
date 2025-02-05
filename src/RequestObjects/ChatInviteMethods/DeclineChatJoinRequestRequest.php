<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatJoinRequestRequestTrait;

class DeclineChatJoinRequestRequest extends BaseRequestObject
{
    use ChatJoinRequestRequestTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     */
    public function __construct(
        int|string $chatId,
        int $userId
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
    }
}
