<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ForceReply;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline\InlineKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\ReplyKeyboardMarkup;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboardRemove;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DurationOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\VideoNoteRequiredTrait;

class SendVideoNoteRequest extends BaseRequestObject
{
    use SendRequestTrait;
    use VideoNoteRequiredTrait;
    use ReplyMarkupOptionalTrait;
    use DurationOptionalTrait;

    /**
     * @param int|string $chatId
     * @param InputFile|string $videoNote
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param int|null $duration
     * @param int|null $length
     * @param InputFile|string|null $thumbnail
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     * @param bool|null $allowPaidBroadcast
     * @param string|null $messageEffectId
     * @param ReplyParameters|null $replyParameters
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup
     */
    public function __construct(
        int|string $chatId,
        InputFile|string $videoNote,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        ?int $duration = null,
        ?int $length = null,
        null|InputFile|string $thumbnail = null,
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
        $this->setVideoNote($videoNote);
        $this->setDuration($duration);
        $this->setLength($length);
        $this->setThumbnail($thumbnail);
        $this->setDisableNotification($disableNotification);
        $this->setProtectContent($protectContent);
        $this->setAllowPaidBroadcast($allowPaidBroadcast);
        $this->setMessageEffectId($messageEffectId);
        $this->setReplyParameters($replyParameters);
        $this->setReplyMarkup($replyMarkup);
    }
}
