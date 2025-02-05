<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

class StopPollRequest extends BaseRequestObject
{
    use BusinessConnectionOptionalTrait;
    use ChatIdRequiredTrait;
    use MessageIdRequiredTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string|null $chatId
     * @param int|null $messageId
     * @param string|null $businessConnectionId
     * @param InlineKeyboardMarkup|null $replyMarkup
     */
    public function __construct(
        int|string $chatId = null,
        int $messageId = null,
        ?string $businessConnectionId = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ) {
        $this->setBusinessConnectionId($businessConnectionId);
        $this->setChatId($chatId);
        $this->setMessageId($messageId);
        $this->setReplyMarkup($replyMarkup);
    }
}
