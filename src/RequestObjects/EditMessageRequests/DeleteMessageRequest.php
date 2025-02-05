<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdRequiredTrait;

class DeleteMessageRequest extends BaseRequestObject
{
    use ChatIdRequiredTrait;
    use MessageIdRequiredTrait;

    /**
     * @param int|string $chatId
     * @param int $messageId
     */
    public function __construct(
        int|string $chatId,
        int $messageId
    ) {
        $this->setChatId($chatId);
        $this->setMessageId($messageId);
    }
}
