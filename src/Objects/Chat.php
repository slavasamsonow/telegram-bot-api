<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\ChatTypeEnum;

class Chat extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'type' => ChatTypeEnum::class,
        'title' => true,
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'is_forum' => true,
    ];

    /**
     * @var int
     */
    public readonly int $id;

    /**
     * @var ChatTypeEnum
     */
    public readonly ChatTypeEnum $type;

    /**
     * @var string|null
     */
    public readonly ?string $title;

    /**
     * @var string|null
     */
    public readonly ?string $username;

    /**
     * @var string|null
     */
    public readonly ?string $firstName;

    /**
     * @var string|null
     */
    public readonly ?string $lastName;

    /**
     * @var bool|null
     */
    public readonly ?bool $isForum;


    /**
     * @param int $id
     *
     * @return void
     */
    protected function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param ChatTypeEnum $type
     *
     * @return void
     */
    protected function setType(ChatTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ChatTypeEnum
     */
    public function getType(): ChatTypeEnum
    {
        return $this->type;
    }

    /**
     * @param string|null $title
     *
     * @return void
     */
    protected function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $username
     *
     * @return void
     */
    protected function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $firstName
     *
     * @return void
     */
    protected function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $lastName
     *
     * @return void
     */
    protected function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param bool|null $isForum
     *
     * @return void
     */
    protected function setIsForum(?bool $isForum): void
    {
        $this->isForum = $isForum;
    }

    /**
     * @return bool|null
     */
    public function getIsForum(): ?bool
    {
        return $this->isForum;
    }
}
