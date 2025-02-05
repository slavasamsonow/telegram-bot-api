<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatSubscriptionInviteLinkRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\InviteLinkRequiredTrait;

class EditChatSubscriptionInviteLinkRequest extends BaseRequestObject
{
    use ChatSubscriptionInviteLinkRequestTrait;
    use InviteLinkRequiredTrait;

    /**
     * @param int|string $chatId
     * @param string $inviteLink
     * @param string|null $name
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        string $inviteLink,
        ?string $name = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setInviteLink($inviteLink);
            $this->setName($name);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException(
                'Error create edit chat subscription invite link request',
                $e->getCode(),
                $e
            );
        }
    }
}
