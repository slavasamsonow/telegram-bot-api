<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\ChatMemberStatusEnum;

class ChatMember extends BaseTelegramObject
{
    // TODO: separate by type

    /**
     * @var array
     */
    protected static array $map = [
        'status' => ChatMemberStatusEnum::class,
        'user' => User::class,
        'is_anonymous' => true,
        'custom_title' => true,
        'can_be_edited' => true,
        'can_manage_chat' => true,
        'can_delete_messages' => true,
        'can_manage_video_chats' => true,
        'can_restrict_members' => true,
        'can_promote_members' => true,
        'can_change_info' => true,
        'can_invite_users' => true,
        'can_post_stories' => true,
        'can_edit_stories' => true,
        'can_delete_stories' => true,
        'can_post_messages' => true,
        'can_edit_messages' => true,
        'can_pin_messages' => true,
        'can_manage_topics' => true,
        'until_date' => true,
        'is_member' => true,
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
    ];

    /**
     * @var ChatMemberStatusEnum
     */
    public readonly ChatMemberStatusEnum $status;

    /**
     * @var User
     */
    public readonly User $user;

    /**
     * @var bool|null
     */
    public readonly ?bool $isAnonymous;

    /**
     * @var string|null
     */
    public readonly ?string $customTitle;

    /**
     * @var bool|null
     */
    public readonly ?bool $canBeEdited;

    /**
     * @var bool|null
     */
    public readonly ?bool $canManageChat;

    /**
     * @var bool|null
     */
    public readonly ?bool $canDeleteMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canManageVideoChats;

    /**
     * @var bool|null
     */
    public readonly ?bool $canRestrictMembers;

    /**
     * @var bool|null
     */
    public readonly ?bool $canPromoteMembers;

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
    public readonly ?bool $canPostStories;

    /**
     * @var bool|null
     */
    public readonly ?bool $canEditStories;

    /**
     * @var bool|null
     */
    public readonly ?bool $canDeleteStories;

    /**
     * @var bool|null
     */
    public readonly ?bool $canPostMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canEditMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canPinMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $canManageTopics;

    /**
     * @var int|null
     */
    public readonly ?int $untilDate;

    /**
     * @var bool|null
     */
    public readonly ?bool $isMember;

    /**
     * @var bool|null
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
     * @param ChatMemberStatusEnum $status
     *
     * @return void
     */
    protected function setStatus(ChatMemberStatusEnum $status): void
    {
        $this->status = $status;
    }

    /**
     * @return ChatMemberStatusEnum
     */
    public function getStatus(): ChatMemberStatusEnum
    {
        return $this->status;
    }

    /**
     * @param User $user
     *
     * @return void
     */
    protected function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param bool|null $isAnonymous
     *
     * @return void
     */
    protected function setIsAnonymous(?bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @return bool|null
     */
    public function getIsAnonymous(): ?bool
    {
        return $this->isAnonymous;
    }

    /**
     * @param string|null $customTitle
     *
     * @return void
     */
    protected function setCustomTitle(?string $customTitle): void
    {
        $this->customTitle = $customTitle;
    }

    /**
     * @return string|null
     */
    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }

    /**
     * @param bool|null $canBeEdited
     *
     * @return void
     */
    protected function setCanBeEdited(?bool $canBeEdited): void
    {
        $this->canBeEdited = $canBeEdited;
    }

    /**
     * @return bool|null
     */
    public function getCanBeEdited(): ?bool
    {
        return $this->canBeEdited;
    }

    /**
     * @param bool|null $canManageChat
     *
     * @return void
     */
    protected function setCanManageChat(?bool $canManageChat): void
    {
        $this->canManageChat = $canManageChat;
    }

    /**
     * @return bool|null
     */
    public function getCanManageChat(): ?bool
    {
        return $this->canManageChat;
    }

    /**
     * @param bool|null $canDeleteMessages
     *
     * @return void
     */
    protected function setCanDeleteMessages(?bool $canDeleteMessages): void
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteMessages(): ?bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * @param bool|null $canManageVideoChats
     *
     * @return void
     */
    protected function setCanManageVideoChats(?bool $canManageVideoChats): void
    {
        $this->canManageVideoChats = $canManageVideoChats;
    }

    /**
     * @return bool|null
     */
    public function getCanManageVideoChats(): ?bool
    {
        return $this->canManageVideoChats;
    }

    /**
     * @param bool|null $canRestrictMembers
     *
     * @return void
     */
    protected function setCanRestrictMembers(?bool $canRestrictMembers): void
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    /**
     * @return bool|null
     */
    public function getCanRestrictMembers(): ?bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * @param bool|null $canPromoteMembers
     *
     * @return void
     */
    protected function setCanPromoteMembers(?bool $canPromoteMembers): void
    {
        $this->canPromoteMembers = $canPromoteMembers;
    }

    /**
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool
    {
        return $this->canPromoteMembers;
    }

    /**
     * @param bool|null $canChangeInfo
     *
     * @return void
     */
    protected function setCanChangeInfo(?bool $canChangeInfo): void
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @param bool|null $canInviteUsers
     *
     * @return void
     */
    protected function setCanInviteUsers(?bool $canInviteUsers): void
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @param bool|null $canPostStories
     *
     * @return void
     */
    protected function setCanPostStories(?bool $canPostStories): void
    {
        $this->canPostStories = $canPostStories;
    }

    /**
     * @return bool|null
     */
    public function getCanPostStories(): ?bool
    {
        return $this->canPostStories;
    }

    /**
     * @param bool|null $canEditStories
     *
     * @return void
     */
    protected function setCanEditStories(?bool $canEditStories): void
    {
        $this->canEditStories = $canEditStories;
    }

    /**
     * @return bool|null
     */
    public function getCanEditStories(): ?bool
    {
        return $this->canEditStories;
    }

    /**
     * @param bool|null $canDeleteStories
     *
     * @return void
     */
    protected function setCanDeleteStories(?bool $canDeleteStories): void
    {
        $this->canDeleteStories = $canDeleteStories;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteStories(): ?bool
    {
        return $this->canDeleteStories;
    }

    /**
     * @param bool|null $canPostMessages
     *
     * @return void
     */
    protected function setCanPostMessages(?bool $canPostMessages): void
    {
        $this->canPostMessages = $canPostMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->canPostMessages;
    }

    /**
     * @param bool|null $canEditMessages
     *
     * @return void
     */
    protected function setCanEditMessages(?bool $canEditMessages): void
    {
        $this->canEditMessages = $canEditMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    /**
     * @param bool|null $canPinMessages
     *
     * @return void
     */
    protected function setCanPinMessages(?bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * @param bool|null $canManageTopics
     *
     * @return void
     */
    protected function setCanManageTopics(?bool $canManageTopics): void
    {
        $this->canManageTopics = $canManageTopics;
    }

    /**
     * @return bool|null
     */
    public function getCanManageTopics(): ?bool
    {
        return $this->canManageTopics;
    }

    /**
     * @param int|null $untilDate
     *
     * @return void
     */
    protected function setUntilDate(?int $untilDate): void
    {
        $this->untilDate = $untilDate;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }

    /**
     * @param bool|null $isMember
     *
     * @return void
     */
    protected function setIsMember(?bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    /**
     * @return bool|null
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    /**
     * @param bool|null $canSendMessages
     *
     * @return void
     */
    protected function setCanSendMessages(?bool $canSendMessages): void
    {
        $this->canSendMessages = $canSendMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * @param bool|null $canSendAudios
     *
     * @return void
     */
    protected function setCanSendAudios(?bool $canSendAudios): void
    {
        $this->canSendAudios = $canSendAudios;
    }

    /**
     * @return bool|null
     */
    public function getCanSendAudios(): ?bool
    {
        return $this->canSendAudios;
    }

    /**
     * @param bool|null $canSendDocuments
     *
     * @return void
     */
    protected function setCanSendDocuments(?bool $canSendDocuments): void
    {
        $this->canSendDocuments = $canSendDocuments;
    }

    /**
     * @return bool|null
     */
    public function getCanSendDocuments(): ?bool
    {
        return $this->canSendDocuments;
    }

    /**
     * @param bool|null $canSendPhotos
     *
     * @return void
     */
    protected function setCanSendPhotos(?bool $canSendPhotos): void
    {
        $this->canSendPhotos = $canSendPhotos;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPhotos(): ?bool
    {
        return $this->canSendPhotos;
    }

    /**
     * @param bool|null $canSendVideos
     *
     * @return void
     */
    protected function setCanSendVideos(?bool $canSendVideos): void
    {
        $this->canSendVideos = $canSendVideos;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideos(): ?bool
    {
        return $this->canSendVideos;
    }

    /**
     * @param bool|null $canSendVideoNotes
     *
     * @return void
     */
    protected function setCanSendVideoNotes(?bool $canSendVideoNotes): void
    {
        $this->canSendVideoNotes = $canSendVideoNotes;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVideoNotes(): ?bool
    {
        return $this->canSendVideoNotes;
    }

    /**
     * @param bool|null $canSendVoiceNotes
     *
     * @return void
     */
    protected function setCanSendVoiceNotes(?bool $canSendVoiceNotes): void
    {
        $this->canSendVoiceNotes = $canSendVoiceNotes;
    }

    /**
     * @return bool|null
     */
    public function getCanSendVoiceNotes(): ?bool
    {
        return $this->canSendVoiceNotes;
    }

    /**
     * @param bool|null $canSendPolls
     *
     * @return void
     */
    protected function setCanSendPolls(?bool $canSendPolls): void
    {
        $this->canSendPolls = $canSendPolls;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * @param bool|null $canSendOtherMessages
     *
     * @return void
     */
    protected function setCanSendOtherMessages(?bool $canSendOtherMessages): void
    {
        $this->canSendOtherMessages = $canSendOtherMessages;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * @param bool|null $canAddWebPagePreviews
     *
     * @return void
     */
    protected function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): void
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }
}
