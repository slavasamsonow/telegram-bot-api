<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\OnlyIfBannedOptionalTrait;

class UnbanChatMemberRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;
    use OnlyIfBannedOptionalTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     * @param bool|null $onlyIfBanned
     */
    public function __construct(
        int|string $chatId,
        int $userId,
        ?bool $onlyIfBanned = null
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
        $this->setOnlyIfBanned($onlyIfBanned);
    }
}
