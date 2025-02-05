<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ChatAdministratorRightOptionsTrait
{
    use ChatAdministratorAndMemberRightsTrait;

    /**
     * @var bool|null
     */
    protected ?bool $isAnonymous;

    /**
     * @var bool|null
     */
    protected ?bool $canManageChat;

    /**
     * @var bool|null
     */
    protected ?bool $canDeleteMessages;

    /**
     * @var bool|null
     */
    protected ?bool $canManageVideoChats;

    /**
     * @var bool|null
     */
    protected ?bool $canRestrictMembers;

    /**
     * @var bool|null
     */
    protected ?bool $canPromoteMembers;

    /**
     * @var bool|null
     */
    protected ?bool $canPostStories;

    /**
     * @var bool|null
     */
    protected ?bool $canEditStories;

    /**
     * @var bool|null
     */
    protected ?bool $canDeleteStories;

    /**
     * @var bool|null
     */
    protected ?bool $canPostMessages;

    /**
     * @var bool|null
     */
    protected ?bool $canEditMessages;


    /**
     * @param bool|null $isAnonymous
     *
     * @return void
     */
    public function setIsAnonymous(?bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @param bool|null $canManageChat
     *
     * @return void
     */
    public function setCanManageChat(?bool $canManageChat): void
    {
        $this->canManageChat = $canManageChat;
    }

    /**
     * @param bool|null $canDeleteMessages
     *
     * @return void
     */
    public function setCanDeleteMessages(?bool $canDeleteMessages): void
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    /**
     * @param bool|null $canManageVideoChats
     *
     * @return void
     */
    public function setCanManageVideoChats(?bool $canManageVideoChats): void
    {
        $this->canManageVideoChats = $canManageVideoChats;
    }

    /**
     * @param bool|null $canRestrictMembers
     *
     * @return void
     */
    public function setCanRestrictMembers(?bool $canRestrictMembers): void
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    /**
     * @param bool|null $canPromoteMembers
     *
     * @return void
     */
    public function setCanPromoteMembers(?bool $canPromoteMembers): void
    {
        $this->canPromoteMembers = $canPromoteMembers;
    }

    /**
     * @param bool|null $canPostStories
     *
     * @return void
     */
    public function setCanPostStories(?bool $canPostStories): void
    {
        $this->canPostStories = $canPostStories;
    }

    /**
     * @param bool|null $canEditStories
     *
     * @return void
     */
    public function setCanEditStories(?bool $canEditStories): void
    {
        $this->canEditStories = $canEditStories;
    }

    /**
     * @param bool|null $canDeleteStories
     *
     * @return void
     */
    public function setCanDeleteStories(?bool $canDeleteStories): void
    {
        $this->canDeleteStories = $canDeleteStories;
    }

    /**
     * @param bool|null $canPostMessages
     *
     * @return void
     */
    public function setCanPostMessages(?bool $canPostMessages): void
    {
        $this->canPostMessages = $canPostMessages;
    }

    /**
     * @param bool|null $canEditMessages
     *
     * @return void
     */
    public function setCanEditMessages(?bool $canEditMessages): void
    {
        $this->canEditMessages = $canEditMessages;
    }
}
