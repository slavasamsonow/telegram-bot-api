<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UserIdRequiredTrait;

trait ChatJoinRequestRequestTrait
{
    use ChatIdRequiredTrait;
    use UserIdRequiredTrait;
}
