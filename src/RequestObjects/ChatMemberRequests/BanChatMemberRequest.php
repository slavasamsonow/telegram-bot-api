<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RevokeMessagesOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UntilDateOptionalTrait;

class BanChatMemberRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;
    use UntilDateOptionalTrait;
    use RevokeMessagesOptionalTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     * @param int|null $untilDate
     * @param bool|null $revokeMessages
     */
    public function __construct(
        int|string $chatId,
        int $userId,
        ?int $untilDate = null,
        ?bool $revokeMessages = null
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
        $this->setUntilDate($untilDate);
        $this->setRevokeMessages($revokeMessages);
    }
}
