<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\ChatMemberStatusEnum;

class ChatPermissions extends BaseTelegramObject
{
    // TODO: separate by type

    /**
     * @var array
     */
    protected static array $map = [
        'can_send_messages' => true,
        'can_send_audios' => true,
        'can_send_documents' => true,
        'can_send_photos' => true,
        'can_send_videos' => true,
        'can_send_video_notes' => true,
        'can_send_voice_notes' => true,
        'can_send_polls' => true,
        'can_send_other_messages' => true,
        'can_add_web_page_previews' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_pin_messages' => true,
        'can_manage_topics' => true,
    ];

    /**
     * @var bool
     */
    public readonly ?bool $canSendMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendAudios;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendDocuments;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendPhotos;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendVideos;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendVideoNotes;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendVoiceNotes;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendPolls;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendOtherMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canAddWebPagePreviews;

    /**
     * @var bool|null
     */
    public readonly ?bool $canChangeInfo;

    /**
     * @var bool|null
     */
    public readonly ?bool $canInviteUsers;

    /**
     * @var bool|null
     */
    public readonly ?bool $canPinMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canManageTopics;

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendMessages(?bool $value): void
    {
        $this->canSendMessages = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendAudios(?bool $value): void
    {
        $this->canSendAudios = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendAudios(): ?bool
    {
        return $this->canSendAudios;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendDocuments(?bool $value): void
    {
        $this->canSendDocuments = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendDocuments(): ?bool
    {
        return $this->canSendDocuments;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendPhotos(?bool $value): void
    {
        $this->canSendPhotos = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPhotos(): ?bool
    {
        return $this->canSendPhotos;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendVideos(?bool $value): void
    {
        $this->canSendVideos = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideos(): ?bool
    {
        return $this->canSendVideos;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendVideoNotes(?bool $value): void
    {
        $this->canSendVideoNotes = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideoNotes(): ?bool
    {
        return $this->canSendVideoNotes;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendVoiceNotes(?bool $value): void
    {
        $this->canSendVoiceNotes = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVoiceNotes(): ?bool
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendPolls(?bool $value): void
    {
        $this->canSendPolls = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanSendOtherMessages(?bool $value): void
    {
        $this->canSendOtherMessages = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanAddWebPagePreviews(?bool $value): void
    {
        $this->canAddWebPagePreviews = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanChangeInfo(?bool $value): void
    {
        $this->canChangeInfo = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanInviteUsers(?bool $value): void
    {
        $this->canInviteUsers = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanPinMessages(?bool $value): void
    {
        $this->canPinMessages = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * @param bool|null $value
     *
     * @return void
     */
    protected function setCanManageTopics(?bool $value): void
    {
        $this->canManageTopics = $value;
    }

    /**
     * @return bool|null
     */
    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }
}
