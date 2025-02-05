<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\ChatInviteLink;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\ApproveChatJoinRequestRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\CreateChatInviteLinkRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\CreateChatSubscriptionInviteLinkRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\DeclineChatJoinRequestRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\EditChatInviteLinkRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\EditChatSubscriptionInviteLinkRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\ExportChatInviteLinkRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods\RevokeChatInviteLinkRequest;

trait ChatInviteMethods
{
    /**
     * @param ExportChatInviteLinkRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function exportChatInviteLink(ExportChatInviteLinkRequest $request): array
    {
        return $this->post('exportChatInviteLink', $request);
    }

    /**
     * @param CreateChatInviteLinkRequest $request
     *
     * @return ChatInviteLink
     * @throws TelegramBotApiException
     */
    public function createChatInviteLink(CreateChatInviteLinkRequest $request): ChatInviteLink
    {
        return ChatInviteLink::fromResponse($this->post('createChatInviteLink', $request));
    }

    /**
     * @param EditChatInviteLinkRequest $request
     *
     * @return ChatInviteLink
     * @throws TelegramBotApiException
     */
    public function editChatInviteLink(EditChatInviteLinkRequest $request): ChatInviteLink
    {
        return ChatInviteLink::fromResponse($this->post('editChatInviteLink', $request));
    }

    /**
     * @param CreateChatSubscriptionInviteLinkRequest $request
     *
     * @return ChatInviteLink
     * @throws TelegramBotApiException
     */
    public function createChatSubscriptionInviteLink(CreateChatSubscriptionInviteLinkRequest $request): ChatInviteLink
    {
        return ChatInviteLink::fromResponse($this->post('createChatSubscriptionInviteLink', $request));
    }

    /**
     * @param EditChatSubscriptionInviteLinkRequest $request
     *
     * @return ChatInviteLink
     * @throws TelegramBotApiException
     */
    public function editChatSubscriptionInviteLink(EditChatSubscriptionInviteLinkRequest $request): ChatInviteLink
    {
        return ChatInviteLink::fromResponse($this->post('editChatSubscriptionInviteLink', $request));
    }

    /**
     * @param RevokeChatInviteLinkRequest $request
     *
     * @return ChatInviteLink
     * @throws TelegramBotApiException
     */
    public function revokeChatInviteLink(RevokeChatInviteLinkRequest $request): ChatInviteLink
    {
        return ChatInviteLink::fromResponse($this->post('revokeChatInviteLink', $request));
    }

    /**
     * @param ApproveChatJoinRequestRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function approveChatJoinRequest(ApproveChatJoinRequestRequest $request): array
    {
        return $this->post('approveChatJoinRequest', $request);
    }

    /**
     * @param DeclineChatJoinRequestRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function declineChatJoinRequest(DeclineChatJoinRequestRequest $request): array
    {
        return $this->post('declineChatJoinRequest', $request);
    }
}
