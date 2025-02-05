<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\Methods\Messages\CopyMethodsTrait;
use Slavasamsonow\TelegramBotApi\Methods\Messages\EditMethodsTrait;
use Slavasamsonow\TelegramBotApi\Methods\Messages\ForwardMethodsTrait;
use Slavasamsonow\TelegramBotApi\Methods\Messages\SendMethodsTrait;

trait MessagesMethodsTrait
{
    use SendMethodsTrait;
    use ForwardMethodsTrait;
    use CopyMethodsTrait;
    use EditMethodsTrait;
}
