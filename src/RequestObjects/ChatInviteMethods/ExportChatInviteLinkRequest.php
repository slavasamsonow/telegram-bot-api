<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;

class ExportChatInviteLinkRequest extends BaseRequestObject
{
    use ChatRequestTrait;

    /**
     * @param int|string $chatId
     */
    public function __construct(
        int|string $chatId
    ) {
        $this->setChatId($chatId);
    }
}
