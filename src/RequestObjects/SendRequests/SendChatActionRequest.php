<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\Enums\ChatActionEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ActionRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageThreadIdOptionalTrait;

class SendChatActionRequest extends BaseRequestObject
{
    use BusinessConnectionOptionalTrait;
    use ChatIdRequiredTrait;
    use MessageThreadIdOptionalTrait;
    use ActionRequiredTrait;

    /**
     * @param int|string $chatId
     * @param ChatActionEnum $action
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     */
    public function __construct(
        int|string $chatId,
        ChatActionEnum $action,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
    ) {
        $this->setBusinessConnectionId($businessConnectionId);
        $this->setChatId($chatId);
        $this->setMessageThreadId($messageThreadId);
        $this->setAction($action);
    }
}
