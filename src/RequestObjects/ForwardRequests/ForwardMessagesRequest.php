<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ForwardRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ForwardRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdsRequiredTrait;

class ForwardMessagesRequest extends BaseRequestObject
{
    use ForwardRequestTrait;
    use MessageIdsRequiredTrait;

    /**
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param array $messageIds
     * @param int|null $messageThreadId
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        int|string $fromChatId,
        array $messageIds,
        ?int $messageThreadId = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setMessageThreadId($messageThreadId);
            $this->setFromChatId($fromChatId);
            $this->setMessageIds($messageIds);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create forward message request', $e->getCode(), $e);
        }
    }
}
