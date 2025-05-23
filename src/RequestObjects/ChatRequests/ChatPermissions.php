<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatMemberPermissionsOptionsTrait;

class ChatPermissions extends BaseRequestObject
{
    use ChatMemberPermissionsOptionsTrait;

    /**
     * @param bool|null $canSendMessages
     * @param bool|null $canSendAudios
     * @param bool|null $canSendDocuments
     * @param bool|null $canSendPhotos
     * @param bool|null $canSendVideos
     * @param bool|null $canSendVideoNotes
     * @param bool|null $canSendVoiceNotes
     * @param bool|null $canSendPolls
     * @param bool|null $canSendOtherMessages
     * @param bool|null $canAddWebPagePreviews
     * @param bool|null $canChangeInfo
     * @param bool|null $canInviteUsers
     * @param bool|null $canPinMessages
     * @param bool|null $canManageTopics
     */
    public function __construct(
        ?bool $canSendMessages = null,
        ?bool $canSendAudios = null,
        ?bool $canSendDocuments = null,
        ?bool $canSendPhotos = null,
        ?bool $canSendVideos = null,
        ?bool $canSendVideoNotes = null,
        ?bool $canSendVoiceNotes = null,
        ?bool $canSendPolls = null,
        ?bool $canSendOtherMessages = null,
        ?bool $canAddWebPagePreviews = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null
    ) {
        $this->setCanSendMessages($canSendMessages);
        $this->setCanSendAudios($canSendAudios);
        $this->setCanSendDocuments($canSendDocuments);
        $this->setCanSendPhotos($canSendPhotos);
        $this->setCanSendVideos($canSendVideos);
        $this->setCanSendVideoNotes($canSendVideoNotes);
        $this->setCanSendVoiceNotes($canSendVoiceNotes);
        $this->setCanSendPolls($canSendPolls);
        $this->setCanSendOtherMessages($canSendOtherMessages);
        $this->setCanAddWebPagePreviews($canAddWebPagePreviews);
        $this->setCanChangeInfo($canChangeInfo);
        $this->setCanInviteUsers($canInviteUsers);
        $this->setCanPinMessages($canPinMessages);
        $this->setCanManageTopics($canManageTopics);
    }

    public static function all(bool $all): static
    {
        return new static($all, $all, $all, $all, $all, $all, $all, $all, $all, $all, $all, $all, $all, $all);
    }
}
