<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\EditMessageRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\LinkPreviewOptionsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageTextRequiredTrait;

class EditMessageTextRequest extends BaseRequestObject
{
    use EditMessageRequestTrait;
    use MessageTextRequiredTrait;

    /**
     * @param string $text
     * @param string|null $businessConnectionId
     * @param int|string|null $chatId
     * @param int|null $messageId
     * @param string|null $inlineMessageId
     * @param ParseModeEnum|null $parseMode
     * @param ArrayOfMessageEntitiesRequest|null $entities
     * @param LinkPreviewOptionsRequest|null $linkPreviewOptions
     * @param InlineKeyboardMarkup|null $replyMarkup
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        string $text,
        ?string $businessConnectionId = null,
        null|int|string $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?ParseModeEnum $parseMode = null,
        ?ArrayOfMessageEntitiesRequest $entities = null,
        ?LinkPreviewOptionsRequest $linkPreviewOptions = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ) {
        try {
            $this->setBusinessConnectionId($businessConnectionId);
            $this->setChatId($chatId);
            $this->setMessageId($messageId);
            $this->setInlineMessageId($inlineMessageId);
            $this->setText($text);
            $this->setParseMode($parseMode);
            $this->setEntities($entities);
            $this->setLinkPreviewOptions($linkPreviewOptions);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create edit message text request', $e->getCode(), $e);
        }
    }
}
