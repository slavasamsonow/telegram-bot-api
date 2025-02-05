<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PermissionsRequiredTrait;

class SetChatPermissionsRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use PermissionsRequiredTrait;

    /**
     * @param int|string $chatId
     * @param ChatPermissions $permissions
     * @param bool|null $useIndependentChatPermissions
     */
    public function __construct(
        int|string $chatId,
        ChatPermissions $permissions,
        ?bool $useIndependentChatPermissions = null
    ) {
        $this->setChatId($chatId);
        $this->setPermissions($permissions);
        $this->setUseIndependentChatPermissions($useIndependentChatPermissions);
    }
}
