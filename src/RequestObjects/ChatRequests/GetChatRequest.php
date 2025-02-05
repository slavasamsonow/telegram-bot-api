<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;

class GetChatRequest extends BaseRequestObject
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
