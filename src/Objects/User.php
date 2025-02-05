<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class User extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'is_bot' => true,
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'language_code' => true,
        'is_premium' => true,
        'added_to_attachment_menu' => true,
        'can_join_groups' => true,
        'can_read_all_group_messages' => true,
        'supports_inline_queries' => true,
        'can_connect_to_business' => true,
        'has_main_web_app' => true,
    ];

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var bool
     */
    protected bool $isBot;

    /**
     * @var string
     */
    protected string $firstName;

    /**
     * @var string|null
     */
    protected ?string $lastName;

    /**
     * @var string|null
     */
    protected ?string $username;

    /**
     * @var string|null
     */
    protected ?string $languageCode;

    /**
     * @var bool|null
     */
    protected ?bool $isPremium;

    /**
     * @var bool|null
     */
    protected ?bool $addedToAttachmentMenu;

    /**
     * @var bool|null
     */
    protected ?bool $canJoinGroups;

    /**
     * @var bool|null
     */
    protected ?bool $canReadAllGroupMessages;

    /**
     * @var bool|null
     */
    protected ?bool $supportsInlineQueries;

    /**
     * @var bool|null
     */
    protected ?bool $canConnectToBusiness;

    /**
     * @var bool|null
     */
    protected ?bool $hasMainWebApp;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

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
     * @return bool
     */
    public function isBot(): bool
    {
        return $this->isBot;
    }

    /**
     * @param bool $isBot
     *
     * @return void
     */
    protected function setIsBot(bool $isBot): void
    {
        $this->isBot = $isBot;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return void
     */
    protected function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
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
    public function getUsername(): ?string
    {
        return $this->username;
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
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * @param string|null $languageCode
     *
     * @return void
     */
    protected function setLanguageCode(?string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * @return bool|null
     */
    public function getIsPremium(): ?bool
    {
        return $this->isPremium;
    }

    /**
     * @param bool|null $isPremium
     *
     * @return void
     */
    protected function setIsPremium(?bool $isPremium): void
    {
        $this->isPremium = $isPremium;
    }

    /**
     * @return bool|null
     */
    public function getAddedToAttachmentMenu(): ?bool
    {
        return $this->addedToAttachmentMenu;
    }

    /**
     * @param bool|null $addedToAttachmentMenu
     *
     * @return void
     */
    protected function setAddedToAttachmentMenu(?bool $addedToAttachmentMenu): void
    {
        $this->addedToAttachmentMenu = $addedToAttachmentMenu;
    }

    /**
     * @return bool|null
     */
    public function getCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    /**
     * @param bool|null $canJoinGroups
     *
     * @return void
     */
    protected function setCanJoinGroups(?bool $canJoinGroups): void
    {
        $this->canJoinGroups = $canJoinGroups;
    }

    /**
     * @return bool|null
     */
    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    /**
     * @param bool|null $canReadAllGroupMessages
     *
     * @return void
     */
    protected function setCanReadAllGroupMessages(?bool $canReadAllGroupMessages): void
    {
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
    }

    /**
     * @return bool|null
     */
    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }

    /**
     * @param bool|null $supportsInlineQueries
     *
     * @return void
     */
    protected function setSupportsInlineQueries(?bool $supportsInlineQueries): void
    {
        $this->supportsInlineQueries = $supportsInlineQueries;
    }

    /**
     * @return bool|null
     */
    public function getCanConnectToBusiness(): ?bool
    {
        return $this->canConnectToBusiness;
    }

    /**
     * @param bool|null $canConnectToBusiness
     *
     * @return void
     */
    protected function setCanConnectToBusiness(?bool $canConnectToBusiness): void
    {
        $this->canConnectToBusiness = $canConnectToBusiness;
    }

    /**
     * @return bool|null
     */
    public function getHasMainWebApp(): ?bool
    {
        return $this->hasMainWebApp;
    }

    /**
     * @param bool|null $hasMainWebApp
     *
     * @return void
     */
    protected function setHasMainWebApp(?bool $hasMainWebApp): void
    {
        $this->hasMainWebApp = $hasMainWebApp;
    }
}
