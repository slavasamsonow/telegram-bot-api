<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ForceReplyRequiredTrait
{
    /**
     * @var bool
     */
    protected bool $forceReply;

    /**
     * @param bool $forceReply
     *
     * @return void
     */
    protected function setForceReply(bool $forceReply): void
    {
        $this->forceReply = $forceReply;
    }
}
