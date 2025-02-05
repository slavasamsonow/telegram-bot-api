<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ForwardRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ForwardRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdRequiredTrait;

class ForwardMessageRequest extends BaseRequestObject
{
    use ForwardRequestTrait;
    use MessageIdRequiredTrait;

    /**
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param int $messageId
     * @param int|null $messageThreadId
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     */
    public function __construct(
        int|string $chatId,
        int|string $fromChatId,
        int $messageId,
        ?int $messageThreadId = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null
    ) {
        $this->setChatId($chatId);
        $this->setMessageThreadId($messageThreadId);
        $this->setFromChatId($fromChatId);
        $this->setDisableNotification($disableNotification);
        $this->setProtectContent($protectContent);
        $this->setMessageId($messageId);
    }
}
