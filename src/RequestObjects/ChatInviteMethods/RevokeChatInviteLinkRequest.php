<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\InviteLinkRequiredTrait;

class RevokeChatInviteLinkRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use InviteLinkRequiredTrait;

    /**
     * @param int|string $chatId
     * @param string $inviteLink
     */
    public function __construct(
        int|string $chatId,
        string $inviteLink
    ) {
        $this->setChatId($chatId);
        $this->inviteLink = $inviteLink;
    }
}
