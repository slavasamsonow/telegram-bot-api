<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;

trait ChatRequestTrait
{
    use ChatIdRequiredTrait;
}
