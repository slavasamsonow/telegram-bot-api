<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\CustomTitleRequiredTrait;

class SetChatAdministratorCustomTitleRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;
    use CustomTitleRequiredTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     * @param string $customTitle
     */
    public function __construct(
        int|string $chatId,
        int $userId,
        string $customTitle
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
        $this->setCustomTitle($customTitle);
    }
}
