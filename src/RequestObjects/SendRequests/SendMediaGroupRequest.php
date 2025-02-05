<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\SendRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Media\Media;
use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;

class SendMediaGroupRequest extends BaseRequestObject
{
    use SendRequestTrait;

    /**
     * @var Media
     */
    protected Media $media;

    /**
     * @param int|string $chatId
     * @param Media $media
     * @param string|null $businessConnectionId
     * @param int|null $messageThreadId
     * @param bool|null $disableNotification
     * @param bool|null $protectContent
     * @param bool|null $allowPaidBroadcast
     * @param string|null $messageEffectId
     * @param ReplyParameters|null $replyParameters
     */
    public function __construct(
        int|string $chatId,
        Media $media,
        ?string $businessConnectionId = null,
        ?int $messageThreadId = null,
        ?bool $disableNotification = null,
        ?bool $protectContent = null,
        ?bool $allowPaidBroadcast = null,
        ?string $messageEffectId = null,
        ?ReplyParameters $replyParameters = null,
    ) {
            $this->setBusinessConnectionId($businessConnectionId);
            $this->setChatId($chatId);
            $this->setMessageThreadId($messageThreadId);
            $this->setMedia($media);
            $this->setDisableNotification($disableNotification);
            $this->setProtectContent($protectContent);
            $this->setAllowPaidBroadcast($allowPaidBroadcast);
            $this->setMessageEffectId($messageEffectId);
            $this->setReplyParameters($replyParameters);
    }

    protected function setMedia(Media $media): void
    {
        $this->media = $media;
    }
}
