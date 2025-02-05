<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\CopyRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\CopyRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\AllowPaidBroadcastOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\CaptionOptionalRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyParametersOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ShowCaptionAboveMediaOptionalTrait;

class CopyMessageRequest extends BaseRequestObject
{
    use CopyRequestTrait;
    use MessageIdRequiredTrait;
    use CaptionOptionalRequestTrait;
    use ShowCaptionAboveMediaOptionalTrait;
    use AllowPaidBroadcastOptionalTrait;
    use ReplyParametersOptionalTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param int $messageId
     * @param int|null $messageThreadId
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param ArrayOfMessageEntitiesRequest|null $captionEntities
     * @param bool|null $showCaptionAboveMedia
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     * @param bool|null $allowPaidBroadcast
     * @param array|null $replyParameters
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        int|string $fromChatId,
        int $messageId,
        ?int $messageThreadId = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?ArrayOfMessageEntitiesRequest $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $allowPaidBroadcast = null,
        ?array $replyParameters = null,
        null|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setMessageThreadId($messageThreadId);
            $this->setFromChatId($fromChatId);
            $this->setMessageId($messageId);
            $this->setCaption($caption);
            $this->setParseMode($parseMode);
            $this->setCaptionEntities($captionEntities);
            $this->setShowCaptionAboveMedia($showCaptionAboveMedia);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setAllowPaidBroadcast($allowPaidBroadcast);
            $this->setReplyParameters($replyParameters);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create copy message request', $e->getCode(), $e);
        }
    }
}
