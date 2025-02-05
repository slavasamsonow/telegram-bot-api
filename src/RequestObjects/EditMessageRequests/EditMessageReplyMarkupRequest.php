<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\EditMessageRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;

class EditMessageReplyMarkupRequest extends BaseRequestObject
{
    use EditMessageRequestTrait;

    public function __construct(
        ?string $businessConnectionId = null,
        null|int|string $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ) {
        $this->setBusinessConnectionId($businessConnectionId);
        $this->setChatId($chatId);
        $this->setMessageId($messageId);
        $this->setInlineMessageId($inlineMessageId);
        $this->setReplyMarkup($replyMarkup);
    }
}
