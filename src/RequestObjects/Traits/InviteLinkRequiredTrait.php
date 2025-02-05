<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait InviteLinkRequiredTrait
{
    /**
     * @var string
     */
    protected string $inviteLink;

    /**
     * @param string $inviteLink
     *
     * @return void
     */
    protected function setInviteLink(string $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }
}
