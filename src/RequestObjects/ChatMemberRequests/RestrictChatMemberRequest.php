<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\ChatPermissions;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PermissionsRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UntilDateOptionalTrait;

class RestrictChatMemberRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;
    use PermissionsRequiredTrait;
    use UntilDateOptionalTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     * @param ChatPermissions $permissions
     * @param bool|null $useIndependentChatPermissions
     * @param int|null $untilDate
     */
    public function __construct(
        int|string $chatId,
        int $userId,
        ChatPermissions $permissions,
        ?bool $useIndependentChatPermissions = null,
        ?int $untilDate = null
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
        $this->setPermissions($permissions);
        $this->setUseIndependentChatPermissions($useIndependentChatPermissions);
        $this->setUntilDate($untilDate);
    }
}
