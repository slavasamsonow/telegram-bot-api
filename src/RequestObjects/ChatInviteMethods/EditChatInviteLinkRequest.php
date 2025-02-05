<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatInviteLinkRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\InviteLinkRequiredTrait;

class EditChatInviteLinkRequest extends BaseRequestObject
{
    use ChatInviteLinkRequestTrait;
    use InviteLinkRequiredTrait;

    /**
     * @param int|string $chatId
     * @param string $inviteLink
     * @param string|null $name
     * @param string|null $expireDate
     * @param int|null $memberLimit
     * @param int|null $createsJoinRequest
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        string $inviteLink,
        ?string $name = null,
        ?string $expireDate = null,
        ?int $memberLimit = null,
        ?int $createsJoinRequest = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setInviteLink($inviteLink);
            $this->setName($name);
            $this->setExpireDate($expireDate);
            $this->setMemberLimit($memberLimit);
            $this->setCreatesJoinRequest($createsJoinRequest);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create edit chat invite link request', $e->getCode(), $e);
        }
    }
}
