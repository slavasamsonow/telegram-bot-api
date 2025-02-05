<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\InlineMessageIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageIdOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyMarkupOptionalTrait;

trait EditMessageRequestTrait
{
    use BusinessConnectionOptionalTrait;
    use ChatIdOptionalTrait;
    use MessageIdOptionalTrait;
    use InlineMessageIdOptionalTrait;
    use ReplyMarkupOptionalTrait;
}
