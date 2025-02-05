<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SubscriptionPeriodRequiredTrait
{
    /**
     * @var int
     */
    protected int $subscriptionPeriod;

    /**
     * @param int $subscriptionPeriod
     *
     * @return void
     */
    protected function setSubscriptionPeriod(int $subscriptionPeriod): void
    {
        $this->subscriptionPeriod = $subscriptionPeriod;
    }
}
