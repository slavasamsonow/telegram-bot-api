<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatInviteLinkNameOptionalTrait;

trait ChatSubscriptionInviteLinkRequestTrait
{
    use ChatRequestTrait;
    use ChatInviteLinkNameOptionalTrait;
}
