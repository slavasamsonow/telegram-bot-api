<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\EditMessageRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Media\InputMedia;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MediaRequiredTrait;

class EditMessageMediaRequest extends BaseRequestObject
{
    use EditMessageRequestTrait;
    use MediaRequiredTrait;

    public function __construct(
        InputMedia $media,
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
        $this->setMedia($media);
        $this->setReplyMarkup($replyMarkup);
    }
}
