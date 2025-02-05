<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\CopyRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\CopyRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdsRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RemoveCaptionOptionalRequestTrait;

class CopyMessagesRequest extends BaseRequestObject
{
    use CopyRequestTrait;
    use MessageIdsRequiredTrait;
    use RemoveCaptionOptionalRequestTrait;

    /**
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param array $messageIds
     * @param int|null $messageThreadId
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     * @param bool|null $removeCaption
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        int|string $fromChatId,
        array $messageIds,
        ?int $messageThreadId = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $removeCaption = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setMessageThreadId($messageThreadId);
            $this->setFromChatId($fromChatId);
            $this->setMessageIds($messageIds);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setRemoveCaption($removeCaption);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create copy messages request', $e->getCode(), $e);
        }
    }
}
