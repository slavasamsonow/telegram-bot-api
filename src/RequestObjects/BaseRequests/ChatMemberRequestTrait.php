<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UserIdRequiredTrait;

trait ChatMemberRequestTrait
{
    use ChatIdRequiredTrait;
    use UserIdRequiredTrait;
}
