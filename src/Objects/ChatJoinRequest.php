<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use DateTime;
use Slavasamsonow\TelegramBotApi\BaseObject;

class ChatJoinRequest extends BaseObject
{
    /**
     * @var array|string[]
     */
    protected static array $map = [
        'chat' => Chat::class,
        'from' => User::class,
        'user_chat_id' => true,
        'date' => true,
        'bio' => true,
        'invite_link' => ChatInviteLink::class
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
    public readonly int $userChatId;

    /**
     * @var int
     */
    public readonly int $date;

    /**
     * @var string|null
     */
    public readonly ?string $bio;

    /**
     * @var ChatInviteLink|null
     */
    public readonly ?ChatInviteLink $inviteLink;


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
     * @return Chat
     */
    public function getChat(): Chat
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
     * @param int $userChatId
     *
     * @return void
     */
    protected function setUserChatId(int $userChatId): void
    {
        $this->userChatId = $userChatId;
    }

    /**
     * @return int
     */
    public function getUserChatId(): int
    {
        return $this->userChatId;
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
     * @param string|null $bio
     *
     * @return void
     */
    protected function setBio(?string $bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
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
}
