<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfChatBoosts;
use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfChatMembers;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\ChatMember;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\BanChatMemberRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\BanChatSenderChatRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\GetChatAdministratorsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\GetChatMemberCountRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\GetChatMemberRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\GetUserChatBoostsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\PromoteChatMemberRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\RestrictChatMemberRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\SetChatAdministratorCustomTitleRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\UnbanChatMemberRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatMemberRequests\UnbanChatSenderChatRequest;

trait ChatMemberMethods
{
    /**
     * @param BanChatMemberRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function banChatMember(BanChatMemberRequest $request): array
    {
        return $this->post('banChatMember', $request);
    }

    /**
     * @param UnbanChatMemberRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function unbanChatMember(UnbanChatMemberRequest $request): array
    {
        return $this->post('unbanChatMember', $request);
    }

    /**
     * @param RestrictChatMemberRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function restrictChatMember(RestrictChatMemberRequest $request): array
    {
        return $this->post('restrictChatMember', $request);
    }

    /**
     * @param PromoteChatMemberRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function promoteChatMember(PromoteChatMemberRequest $request): array
    {
        return $this->post('promoteChatMember', $request);
    }

    /**
     * @param SetChatAdministratorCustomTitleRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleRequest $request): array
    {
        return $this->post('setChatAdministratorCustomTitle', $request);
    }

    /**
     * @param BanChatSenderChatRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function banChatSenderChat(BanChatSenderChatRequest $request): array
    {
        return $this->post('banChatSenderChat', $request);
    }

    /**
     * @param UnbanChatSenderChatRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function unbanChatSenderChat(UnbanChatSenderChatRequest $request): array
    {
        return $this->post('unbanChatSenderChat', $request);
    }

    /**
     * @param GetChatAdministratorsRequest $request
     *
     * @return ArrayOfChatMembers
     * @throws TelegramBotApiException
     */
    public function getChatAdministrators(GetChatAdministratorsRequest $request): ArrayOfChatMembers
    {
        return ArrayOfChatMembers::fromResponse($this->post('getChatAdministrators', $request)['result']);
    }

    /**
     * @param GetChatMemberCountRequest $request
     *
     * @return int
     * @throws TelegramBotApiException
     */
    public function getChatMemberCount(GetChatMemberCountRequest $request): int
    {
        return (int) $this->post('getChatMemberCount', $request)['result'];
    }

    /**
     * @param GetChatMemberRequest $request
     *
     * @return ChatMember
     * @throws TelegramBotApiException
     */
    public function getChatMember(GetChatMemberRequest $request): ChatMember
    {
        return ChatMember::fromResponse($this->post('getChatMember', $request)['result']);
    }

    /**
     * @param GetUserChatBoostsRequest $request
     *
     * @return ArrayOfChatBoosts
     * @throws TelegramBotApiException
     */
    public function getUserChatBoosts(GetUserChatBoostsRequest $request): ArrayOfChatBoosts
    {
        return ArrayOfChatBoosts::fromResponse($this->post('getUserChatBoosts', $request)['result']);
    }
}
