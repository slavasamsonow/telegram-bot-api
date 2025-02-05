<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait MessageIdsRequiredTrait
{
    /**
     * @var array
     */
    protected array $messageIds;

    /**
     * @param array $messageIds
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setMessageIds(array $messageIds): void
    {
        if (count($messageIds) < 1) {
            throw new TelegramBotApiException('Count of message ids must be more then 0');
        } elseif (count($messageIds) > 100) {
            throw new TelegramBotApiException('Count of message ids must be less then 0');
        }
        foreach ($messageIds as $messageId) {
            $this->addMessageId($messageId);
        }
    }

    /**
     * @param int $messageId
     *
     * @return void
     */
    protected function addMessageId(int $messageId): void
    {
        $this->messageIds[] = $messageId;
    }
}
