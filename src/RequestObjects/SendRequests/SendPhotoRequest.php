<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PhotoRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

class SendPhotoRequest extends BaseRequestObject
{
    use SendRequestTrait;
    use PhotoRequiredTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string $chatId
     * @param InputFile|string $photo
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param ArrayOfMessageEntitiesRequest|null $captionEntities
     * @param bool|null $showCaptionAboveMedia
     * @param bool|null $hasSpoiler
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     * @param bool|null $allowPaidBroadcast
     * @param string|null $messageEffectId
     * @param ReplyParameters|null $replyParameters
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        InputFile|string $photo,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?ArrayOfMessageEntitiesRequest $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $hasSpoiler = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $allowPaidBroadcast = null,
        ?string $messageEffectId = null,
        ?ReplyParameters $replyParameters = null,
        null|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup = null
    ) {
        try {
            $this->setBusinessConnectionId($businessConnectionId);
            $this->setChatId($chatId);
            $this->setMessageThreadId($messageThreadId);
            $this->setPhoto($photo);
            $this->setCaption($caption);
            $this->setParseMode($parseMode);
            $this->setCaptionEntities($captionEntities);
            $this->setShowCaptionAboveMedia($showCaptionAboveMedia);
            $this->setHasSpoiler($hasSpoiler);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setAllowPaidBroadcast($allowPaidBroadcast);
            $this->setMessageEffectId($messageEffectId);
            $this->setReplyParameters($replyParameters);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create send photo request', $e->getCode(), $e);
        }
    }
}
