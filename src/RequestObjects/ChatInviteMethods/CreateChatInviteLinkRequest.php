<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatInviteLinkRequestTrait;

class CreateChatInviteLinkRequest extends BaseRequestObject
{
    use ChatInviteLinkRequestTrait;

    /**
     * @param int|string $chatId
     * @param string|null $name
     * @param string|null $expireDate
     * @param int|null $memberLimit
     * @param int|null $createsJoinRequest
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        ?string $name = null,
        ?string $expireDate = null,
        ?int $memberLimit = null,
        ?int $createsJoinRequest = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setName($name);
            $this->setExpireDate($expireDate);
            $this->setMemberLimit($memberLimit);
            $this->setCreatesJoinRequest($createsJoinRequest);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException(
                'Error create create chat invite link request',
                $e->getCode(),
                $e
            );
        }
    }
}
