<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatAdministratorRightOptionsTrait;

class ChatAdministratorRightsRequest extends BaseRequestObject
{
    use ChatAdministratorRightOptionsTrait;

    /**
     * @param bool $isAnonymous
     * @param bool $canManageChat
     * @param bool $canDeleteMessages
     * @param bool $canManageVideoChats
     * @param bool $canRestrictMembers
     * @param bool $canPromoteMembers
     * @param bool $canChangeInfo
     * @param bool $canInviteUsers
     * @param bool $canPostStories
     * @param bool $canEditStories
     * @param bool $canDeleteStories
     * @param bool $canPostMessages
     * @param bool $canEditMessages
     * @param bool $canPinMessages
     * @param bool $canManageTopics
     */
    public function __construct(
        bool $isAnonymous,
        bool $canManageChat,
        bool $canDeleteMessages,
        bool $canManageVideoChats,
        bool $canRestrictMembers,
        bool $canPromoteMembers,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPostStories,
        bool $canEditStories,
        bool $canDeleteStories,
        bool $canPostMessages,
        bool $canEditMessages,
        bool $canPinMessages,
        bool $canManageTopics
    ) {
        $this->setIsAnonymous($isAnonymous);
        $this->setCanManageChat($canManageChat);
        $this->setCanDeleteMessages($canDeleteMessages);
        $this->setCanManageVideoChats($canManageVideoChats);
        $this->setCanRestrictMembers($canRestrictMembers);
        $this->setCanPromoteMembers($canPromoteMembers);
        $this->setCanChangeInfo($canChangeInfo);
        $this->setCanInviteUsers($canInviteUsers);
        $this->setCanPostStories($canPostStories);
        $this->setCanEditStories($canEditStories);
        $this->setCanDeleteStories($canDeleteStories);
        $this->setCanPostMessages($canPostMessages);
        $this->setCanEditMessages($canEditMessages);
        $this->setCanPinMessages($canPinMessages);
        $this->setCanManageTopics($canManageTopics);
    }
}
