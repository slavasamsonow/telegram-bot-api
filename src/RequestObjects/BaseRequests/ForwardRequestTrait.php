<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DisableNotificationOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\FromChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageThreadIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ProtectContentOptionalTrait;

trait ForwardRequestTrait
{
    use ChatIdRequiredTrait;
    use MessageThreadIdOptionalTrait;
    use FromChatIdRequiredTrait;
    use DisableNotificationOptionalTrait;
    use ProtectContentOptionalTrait;
}
