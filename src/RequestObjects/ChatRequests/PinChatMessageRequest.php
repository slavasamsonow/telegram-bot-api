<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DisableNotificationOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdRequiredTrait;

class PinChatMessageRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use BusinessConnectionOptionalTrait;
    use MessageIdRequiredTrait;
    use DisableNotificationOptionalTrait;

    /**
     * @param int|string $chatId
     * @param int $messageId
     * @param string|null $businessConnectionId
     * @param bool|null $disableNotification
     */
    public function __construct(
        int|string $chatId,
        int $messageId,
        ?string $businessConnectionId = null,
        ?bool $disableNotification = null
    ) {
        $this->setChatId($chatId);
        $this->setMessageId($messageId);
        $this->setBusinessConnectionId($businessConnectionId);
        $this->setDisableNotification($disableNotification);
    }
}
