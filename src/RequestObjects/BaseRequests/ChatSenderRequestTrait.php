<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SenderChatIdRequiredTrait;

trait ChatSenderRequestTrait
{
    use ChatIdRequiredTrait;
    use SenderChatIdRequiredTrait;
}
