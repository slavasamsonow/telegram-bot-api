<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DocumentRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

class SendDocumentRequest extends BaseRequestObject
{
    use SendRequestTrait;
    use DocumentRequiredTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string $chatId
     * @param InputFile|string $document
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param InputFile|string|null $thumbnail
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param array|null $captionEntities
     * @param bool|null $disableContentTypeDetection
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
        InputFile|string $document,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        null|InputFile|string $thumbnail = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableContentTypeDetection = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $allowPaidBroadcast = null,
        ?string $messageEffectId = null,
        ?ReplyParameters $replyParameters = null,
        null|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setBusinessConnectionId($businessConnectionId);
            $this->setMessageThreadId($messageThreadId);
            $this->setDocument($document);
            $this->setThumbnail($thumbnail);
            $this->setCaption($caption);
            $this->setParseMode($parseMode);
            $this->setCaptionEntities($captionEntities);
            $this->setDisableContentTypeDetection($disableContentTypeDetection);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setAllowPaidBroadcast($allowPaidBroadcast);
            $this->setMessageEffectId($messageEffectId);
            $this->setReplyParameters($replyParameters);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create send document request', $e->getCode(), $e);
        }
    }
}
