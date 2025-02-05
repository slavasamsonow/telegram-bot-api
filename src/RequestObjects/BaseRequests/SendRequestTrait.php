<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\AllowPaidBroadcastOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DisableNotificationOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageEffectIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageThreadIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ProtectContentOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyParametersOptionalTrait;

trait SendRequestTrait
{
    use BusinessConnectionOptionalTrait;
    use ChatIdRequiredTrait;
    use MessageThreadIdOptionalTrait;
    use DisableNotificationOptionalTrait;
    use ProtectContentOptionalTrait;
    use AllowPaidBroadcastOptionalTrait;
    use MessageEffectIdOptionalTrait;
    use ReplyParametersOptionalTrait;
}
