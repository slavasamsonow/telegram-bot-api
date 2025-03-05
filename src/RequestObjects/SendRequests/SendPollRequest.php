<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Enums\PollTypeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfInputPollOptionsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PollRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

class SendPollRequest extends BaseRequestObject
{
    use SendRequestTrait;
    use PollRequiredTrait;
    use ReplyMarkupOptionalTrait;

    /**
     * @param int|string $chatId
     * @param string $question
     * @param ArrayOfInputPollOptionsRequest $options
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param ParseModeEnum|null $questionParseMode
     * @param ArrayOfMessageEntitiesRequest|null $questionEntities
     * @param bool|null $isAnonymous
     * @param PollTypeEnum|null $type
     * @param bool|null $allowsMultipleAnswers
     * @param int|null $correctOptionId
     * @param string|null $explanation
     * @param ParseModeEnum|null $explanationParseMode
     * @param ArrayOfMessageEntitiesRequest|null $explanationEntities
     * @param int|null $openPeriod
     * @param int|null $closeDate
     * @param bool|null $isClosed
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
        string $question,
        ArrayOfInputPollOptionsRequest $options,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        ?ParseModeEnum $questionParseMode = null,
        ?ArrayOfMessageEntitiesRequest $questionEntities = null,
        ?bool $isAnonymous = null,
        ?PollTypeEnum $type = null,
        ?bool $allowsMultipleAnswers = null,
        ?int $correctOptionId = null,
        ?string $explanation = null,
        ?ParseModeEnum $explanationParseMode = null,
        ?ArrayOfMessageEntitiesRequest $explanationEntities = null,
        ?int $openPeriod = null,
        ?int $closeDate = null,
        ?bool $isClosed = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $allowPaidBroadcast = null,
        ?string $messageEffectId = null,
        ?ReplyParameters $replyParameters = null,
        null|InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup = null
    ) {
        $this->setBusinessConnectionId($businessConnectionId);
        $this->setChatId($chatId);
        $this->setMessageThreadId($messageThreadId);
        $this->setQuestion($question);
        $this->setQuestionParseMode($questionParseMode);
        $this->setQuestionEntities($questionEntities);
        $this->setOptions($options);
        $this->setIsAnonymous($isAnonymous);
        $this->setType($type);
        $this->setAllowsMultipleAnswers($allowsMultipleAnswers);
        $this->setCorrectOptionId($correctOptionId);
        $this->setExplanation($explanation);
        $this->setExplanationParseMode($explanationParseMode);
        $this->setExplanationEntities($explanationEntities);
        $this->setOpenPeriod($openPeriod);
        $this->setCloseDate($closeDate);
        $this->setIsClosed($isClosed);
        $this->setDisableNotification($disableNotification);
        $this->setProtectContent($protectContent);
        $this->setAllowPaidBroadcast($allowPaidBroadcast);
        $this->setMessageEffectId($messageEffectId);
        $this->setReplyParameters($replyParameters);
        $this->setReplyMarkup($replyMarkup);
    }
}
