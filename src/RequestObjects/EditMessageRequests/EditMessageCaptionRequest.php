<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\EditMessageRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\CaptionOptionalRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ShowCaptionAboveMediaOptionalTrait;

class EditMessageCaptionRequest extends BaseRequestObject
{
    use EditMessageRequestTrait;
    use CaptionOptionalRequestTrait;
    use ShowCaptionAboveMediaOptionalTrait;

    /**
     * @param string|null $businessConnectionId
     * @param int|string|null $chatId
     * @param int|null $messageId
     * @param string|null $inlineMessageId
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param ArrayOfMessageEntitiesRequest|null $captionEntities
     * @param bool|null $showCaptionAboveMedia
     * @param InlineKeyboardMarkup|null $replyMarkup
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        ?string $businessConnectionId = null,
        null|int|string $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?ArrayOfMessageEntitiesRequest $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?InlineKeyboardMarkup $replyMarkup = null
    ) {
        try {
            $this->setBusinessConnectionId($businessConnectionId);
            $this->setChatId($chatId);
            $this->setMessageId($messageId);
            $this->setInlineMessageId($inlineMessageId);
            $this->setCaption($caption);
            $this->setParseMode($parseMode);
            $this->setCaptionEntities($captionEntities);
            $this->setShowCaptionAboveMedia($showCaptionAboveMedia);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create edit message caption request', $e->getCode(), $e);
        }
    }
}
