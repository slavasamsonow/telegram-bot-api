<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ChatAdministratorAndMemberRightsTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $canChangeInfo;

    /**
     * @var bool|null
     */
    protected ?bool $canInviteUsers;

    /**
     * @var bool|null
     */
    protected ?bool $canPinMessages;

    /**
     * @var bool|null
     */
    protected ?bool $canManageTopics;


    /**
     * @param bool|null $canChangeInfo
     *
     * @return void
     */
    public function setCanChangeInfo(?bool $canChangeInfo): void
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    /**
     * @param bool|null $canInviteUsers
     *
     * @return void
     */
    public function setCanInviteUsers(?bool $canInviteUsers): void
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    /**
     * @param bool|null $canPinMessages
     *
     * @return void
     */
    public function setCanPinMessages(?bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * @param bool|null $canManageTopics
     *
     * @return void
     */
    public function setCanManageTopics(?bool $canManageTopics): void
    {
        $this->canManageTopics = $canManageTopics;
    }
}
