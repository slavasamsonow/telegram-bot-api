<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatTitleRequiredTrait;

class SetChatTitleRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use ChatTitleRequiredTrait;

    /**
     * @param int|string $chatId
     * @param string $title
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        string $title
    ) {
        try {
            $this->setChatId($chatId);
            $this->setTitle($title);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create set chat title request', $e->getCode(), $e);
        }
    }
}
