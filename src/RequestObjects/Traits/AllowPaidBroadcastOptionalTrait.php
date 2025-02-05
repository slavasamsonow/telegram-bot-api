<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait AllowPaidBroadcastOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $allowPaidBroadcast;

    /**
     * @param bool|null $allowPaidBroadcast
     *
     * @return void
     */
    public function setAllowPaidBroadcast(?bool $allowPaidBroadcast): void
    {
        $this->allowPaidBroadcast = $allowPaidBroadcast;
    }
}
