<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatInviteMethods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatSubscriptionInviteLinkRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SubscriptionPeriodRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SubscriptionPriceRequiredTrait;

class CreateChatSubscriptionInviteLinkRequest extends BaseRequestObject
{
    use ChatSubscriptionInviteLinkRequestTrait;
    use SubscriptionPeriodRequiredTrait;
    use SubscriptionPriceRequiredTrait;

    /**
     * @param int|string $chatId
     * @param int $subscriptionPeriod
     * @param int $subscriptionPrice
     * @param string|null $name
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        int $subscriptionPeriod,
        int $subscriptionPrice,
        ?string $name = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setName($name);
            $this->setSubscriptionPeriod($subscriptionPeriod);
            $this->setSubscriptionPrice($subscriptionPrice);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException(
                'Error create create chat subscription invite link request',
                $e->getCode(),
                $e
            );
        }
    }
}
