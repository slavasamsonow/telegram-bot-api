<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatAdministratorRights extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'is_anonymous' => true,
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
    ];
    /**
     * @var bool
     */
    public readonly bool $isAnonymous;

    /**
     * @var bool
     */
    public readonly bool $canManageChat;

    /**
     * @var bool
     */
    public readonly bool $canDeleteMessages;

    /**
     * @var bool
     */
    public readonly bool $canManageVideoChats;

    /**
     * @var bool
     */
    public readonly bool $canRestrictMembers;

    /**
     * @var bool
     */
    public readonly bool $canPromoteMembers;

    /**
     * @var bool
     */
    public readonly bool $canChangeInfo;

    /**
     * @var bool
     */
    public readonly bool $canInviteUsers;

    /**
     * @var bool
     */
    public readonly bool $canPostStories;

    /**
     * @var bool
     */
    public readonly bool $canEditStories;

    /**
     * @var bool
     */
    public readonly bool $canDeleteStories;

    /**
     * @var bool
     */
    public readonly bool $canPostMessages;

    /**
     * @var bool
     */
    public readonly bool $canEditMessages;

    /**
     * @var bool
     */
    public readonly bool $canPinMessages;

    /**
     * @var bool
     */
    public readonly bool $canManageTopics;


    /**
     * @param bool $isAnonymous
     *
     * @return void
     */
    protected function setIsAnonymous(bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @param bool $canManageChat
     *
     * @return void
     */
    protected function setCanManageChat(bool $canManageChat): void
    {
        $this->canManageChat = $canManageChat;
    }

    /**
     * @return bool
     */
    public function isCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    /**
     * @param bool $canDeleteMessages
     *
     * @return void
     */
    protected function setCanDeleteMessages(bool $canDeleteMessages): void
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    /**
     * @return bool
     */
    public function isCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * @param bool $canManageVideoChats
     *
     * @return void
     */
    protected function setCanManageVideoChats(bool $canManageVideoChats): void
    {
        $this->canManageVideoChats = $canManageVideoChats;
    }

    /**
     * @return bool
     */
    public function isCanManageVideoChats(): bool
    {
        return $this->canManageVideoChats;
    }

    /**
     * @param bool $canRestrictMembers
     *
     * @return void
     */
    protected function setCanRestrictMembers(bool $canRestrictMembers): void
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    /**
     * @return bool
     */
    public function isCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * @param bool $canPromoteMembers
     *
     * @return void
     */
    protected function setCanPromoteMembers(bool $canPromoteMembers): void
    {
        $this->canPromoteMembers = $canPromoteMembers;
    }

    /**
     * @return bool
     */
    public function isCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    /**
     * @param bool $canChangeInfo
     *
     * @return void
     */
    protected function setCanChangeInfo(bool $canChangeInfo): void
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    /**
     * @return bool
     */
    public function isCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    /**
     * @param bool $canInviteUsers
     *
     * @return void
     */
    protected function setCanInviteUsers(bool $canInviteUsers): void
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    /**
     * @return bool
     */
    public function isCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    /**
     * @param bool $canPostStories
     *
     * @return void
     */
    protected function setCanPostStories(bool $canPostStories): void
    {
        $this->canPostStories = $canPostStories;
    }

    /**
     * @return bool
     */
    public function isCanPostStories(): bool
    {
        return $this->canPostStories;
    }

    /**
     * @param bool $canEditStories
     *
     * @return void
     */
    protected function setCanEditStories(bool $canEditStories): void
    {
        $this->canEditStories = $canEditStories;
    }

    /**
     * @return bool
     */
    public function isCanEditStories(): bool
    {
        return $this->canEditStories;
    }

    /**
     * @param bool $canDeleteStories
     *
     * @return void
     */
    protected function setCanDeleteStories(bool $canDeleteStories): void
    {
        $this->canDeleteStories = $canDeleteStories;
    }

    /**
     * @return bool
     */
    public function isCanDeleteStories(): bool
    {
        return $this->canDeleteStories;
    }

    /**
     * @param bool $canPostMessages
     *
     * @return void
     */
    protected function setCanPostMessages(bool $canPostMessages): void
    {
        $this->canPostMessages = $canPostMessages;
    }

    /**
     * @return bool
     */
    public function isCanPostMessages(): bool
    {
        return $this->canPostMessages;
    }

    /**
     * @param bool $canEditMessages
     *
     * @return void
     */
    protected function setCanEditMessages(bool $canEditMessages): void
    {
        $this->canEditMessages = $canEditMessages;
    }

    /**
     * @return bool
     */
    public function isCanEditMessages(): bool
    {
        return $this->canEditMessages;
    }

    /**
     * @param bool $canPinMessages
     *
     * @return void
     */
    protected function setCanPinMessages(bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * @return bool
     */
    public function isCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    /**
     * @param bool $canManageTopics
     *
     * @return void
     */
    protected function setCanManageTopics(bool $canManageTopics): void
    {
        $this->canManageTopics = $canManageTopics;
    }

    /**
     * @return bool
     */
    public function isCanManageTopics(): bool
    {
        return $this->canManageTopics;
    }
}
