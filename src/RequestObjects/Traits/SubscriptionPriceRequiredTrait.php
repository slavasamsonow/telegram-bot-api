<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SubscriptionPriceRequiredTrait
{
    /**
     * @var int
     */
    protected int $subscriptionPrice;

    /**
     * @param int $subscriptionPrice
     *
     * @return void
     */
    protected function setSubscriptionPrice(int $subscriptionPrice): void
    {
        $this->subscriptionPrice = $subscriptionPrice;
    }
}
