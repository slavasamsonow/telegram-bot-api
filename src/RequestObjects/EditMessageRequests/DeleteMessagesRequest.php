<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdsRequiredTrait;

class DeleteMessagesRequest extends BaseRequestObject
{
    use ChatIdRequiredTrait;
    use MessageIdsRequiredTrait;

    /**
     * @param int|string $chatId
     * @param array $messageId
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        array $messageId
    ) {
        try {
            $this->setChatId($chatId);
            $this->setMessageIds($messageId);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create delete message request', $e->getCode(), $e);
        }
    }
}
