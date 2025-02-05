<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\LinkPreviewOptionsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageTextRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

class SendMessageRequest extends BaseRequestObject
{
    use SendRequestTrait;

    use MessageTextRequiredTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string $chatId
     * @param string $text
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param ParseModeEnum|null $parseMode
     * @param ArrayOfMessageEntitiesRequest|null $entities
     * @param LinkPreviewOptionsRequest|null $linkPreviewOptions
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
        string $text,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        ?ParseModeEnum $parseMode = null,
        ?ArrayOfMessageEntitiesRequest $entities = null,
        ?LinkPreviewOptionsRequest $linkPreviewOptions = null,
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
            $this->setText($text);
            $this->setParseMode($parseMode);
            $this->setEntities($entities);
            $this->setLinkPreviewOptions($linkPreviewOptions);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setAllowPaidBroadcast($allowPaidBroadcast);
            $this->setMessageEffectId($messageEffectId);
            $this->setReplyParameters($replyParameters);
            $this->setReplyMarkup($replyMarkup);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create send message request', $e->getCode(), $e);
        }
    }
}
