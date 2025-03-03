<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatMemberUpdated extends BaseTelegramObject
{
    /**
     * @var array|string[]
     */
    protected static array $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'date' => true,
        'old_chat_member' => ChatMember::class,
        'new_chat_member' => ChatMember::class,
        'invite_link' => ChatInviteLink::class,
        'via_join_request' => true,
        'via_chat_folder_invite_link' => true
    ];

    /**
     * @var Chat
     */
    public readonly Chat $chat;

    /**
     * @var User
     */
    public readonly User $from;

    /**
     * @var int
     */
    public readonly int $date;

    /**
     * @var ChatMember
     */
    public readonly ChatMember $oldChatMember;

    /**
     * @var ChatMember
     */
    public readonly ChatMember $newChatMember;

    /**
     * @var ChatInviteLink|null
     */
    public readonly ?ChatInviteLink $inviteLink;

    /**
     * @var bool|null
     */
    public readonly ?bool $viaJoinRequest;

    /**
     * @var bool|null
     */
    public readonly ?bool $viaChatFolderInviteLink;

    /**
     * @param Chat $chat
     *
     * @return void
     */
    protected function setChat(Chat $chat): void
    {
        $this->chat = $chat;
    }

    /**
     * @param Chat $chat
     *
     * @return Chat
     */
    public function getChat(Chat $chat): Chat
    {
        return $this->chat;
    }

    /**
     * @param User $from
     *
     * @return void
     */
    protected function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param int $date
     *
     * @return void
     */
    protected function setDate(int $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param ChatMember $oldChatMember
     *
     * @return void
     */
    protected function setOldChatMember(ChatMember $oldChatMember): void
    {
        $this->oldChatMember = $oldChatMember;
    }

    /**
     * @return ChatMember
     */
    public function getOldChatMember(): ChatMember
    {
        return $this->oldChatMember;
    }

    /**
     * @param ChatMember $newChatMember
     *
     * @return void
     */
    protected function setNewChatMember(ChatMember $newChatMember): void
    {
        $this->newChatMember = $newChatMember;
    }

    /**
     * @return ChatMember
     */
    public function getNewChatMember(): ChatMember
    {
        return $this->newChatMember;
    }

    /**
     * @param ChatInviteLink|null $inviteLink
     *
     * @return void
     */
    protected function setInviteLink(?ChatInviteLink $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }

    /**
     * @return ChatInviteLink|null
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    /**
     * @param bool|null $viaJoinRequest
     *
     * @return void
     */
    protected function setViaJoinRequest(?bool $viaJoinRequest): void
    {
        $this->viaJoinRequest = $viaJoinRequest;
    }

    /**
     * @return bool|null
     */
    public function getViaJoinRequest(): ?bool
    {
        return $this->viaJoinRequest;
    }

    /**
     * @param bool|null $viaChatFolderInviteLink
     *
     * @return void
     */
    protected function setViaChatFolderInviteLink(?bool $viaChatFolderInviteLink): void
    {
        $this->viaChatFolderInviteLink = $viaChatFolderInviteLink;
    }

    /**
     * @return bool|null
     */
    public function getViaChatFolderInviteLink(): ?bool
    {
        return $this->viaChatFolderInviteLink;
    }
}
