<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatMemberRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatAdministratorRightOptionsTrait;

class PromoteChatMemberRequest extends BaseRequestObject
{
    use ChatMemberRequestTrait;
    use ChatAdministratorRightOptionsTrait;

    /**
     * @param int|string $chatId
     * @param int $userId
     * @param bool|null $isAnonymous
     * @param bool|null $canManageChat
     * @param bool|null $canDeleteMessages
     * @param bool|null $canManageVideoChats
     * @param bool|null $canRestrictMembers
     * @param bool|null $canPromoteMembers
     * @param bool|null $canChangeInfo
     * @param bool|null $canInviteUsers
     * @param bool|null $canPostStories
     * @param bool|null $canEditStories
     * @param bool|null $canDeleteStories
     * @param bool|null $canPostMessages
     * @param bool|null $canEditMessages
     * @param bool|null $canPinMessages
     * @param bool|null $canManageTopics
     */
    public function __construct(
        int|string $chatId,
        int $userId,
        ?bool $isAnonymous = null,
        ?bool $canManageChat = null,
        ?bool $canDeleteMessages = null,
        ?bool $canManageVideoChats = null,
        ?bool $canRestrictMembers = null,
        ?bool $canPromoteMembers = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPostStories = null,
        ?bool $canEditStories = null,
        ?bool $canDeleteStories = null,
        ?bool $canPostMessages = null,
        ?bool $canEditMessages = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null
    ) {
        $this->setChatId($chatId);
        $this->setUserId($userId);
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
