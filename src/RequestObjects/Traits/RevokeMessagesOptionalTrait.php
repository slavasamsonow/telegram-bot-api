<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RevokeMessagesOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $revokeMessages;

    /**
     * @param bool|null $revokeMessages
     *
     * @return void
     */
    public function setRevokeMessages(?bool $revokeMessages): void
    {
        $this->revokeMessages = $revokeMessages;
    }
}
