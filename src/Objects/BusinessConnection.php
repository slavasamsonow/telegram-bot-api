<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BusinessConnection extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'user' => User::class,
        'user_chat_id' => true,
        'date' => true,
        'can_reply' => true,
        'is_enabled' => true,
    ];

    /**
     * @var string
     */
    public readonly string $id;

    /**
     * @var User
     */
    public readonly User $user;

    /**
     * @var int
     */
    public readonly int $userChatId;

    /**
     * @var int
     */
    public readonly int $date;

    /**
     * @var bool
     */
    public readonly bool $canReply;

    /**
     * @var bool
     */
    public readonly bool $isEnabled;


    /**
     * @param string $id
     *
     * @return void
     */
    protected function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
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
     * @param bool $canReply
     *
     * @return void
     */
    protected function setCanReply(bool $canReply): void
    {
        $this->canReply = $canReply;
    }

    /**
     * @return bool
     */
    public function isCanReply(): bool
    {
        return $this->canReply;
    }

    /**
     * @param bool $isEnabled
     *
     * @return void
     */
    protected function setIsEnabled(bool $isEnabled): void
    {
        $this->isEnabled = $isEnabled;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->isEnabled;
    }
}
