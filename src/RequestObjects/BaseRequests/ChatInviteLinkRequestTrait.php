<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatInviteLinkNameOptionalTrait;

trait ChatInviteLinkRequestTrait
{
    use ChatRequestTrait;
    use ChatInviteLinkNameOptionalTrait;

    /**
     * @var int|null
     */
    protected ?int $expireDate;

    /**
     * @var int|null
     */
    protected ?int $memberLimit;

    /**
     * @var int|null
     */
    protected ?int $createsJoinRequest;

    /**
     * @param int|null $expireDate
     *
     * @return void
     */
    public function setExpireDate(?int $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @param int|null $memberLimit
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setMemberLimit(?int $memberLimit): void
    {
        if ($memberLimit !== null) {
            if ($memberLimit < 1) {
                throw new TelegramBotApiException('Member limit must be more than 1');
            } elseif ($memberLimit > 99999) {
                throw new TelegramBotApiException('Member limit must be less than 99 999');
            } elseif ($this->createsJoinRequest) {
                throw new TelegramBotApiException('Use member limit or creates join request');
            }
        }
        $this->memberLimit = $memberLimit;
    }

    /**
     * @param int|null $createsJoinRequest
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setCreatesJoinRequest(?int $createsJoinRequest): void
    {
        if ($createsJoinRequest !== null) {
            if ($this->memberLimit) {
                throw new TelegramBotApiException('Use member limit or creates join request');
            }
        }
        $this->createsJoinRequest = $createsJoinRequest;
    }
}
