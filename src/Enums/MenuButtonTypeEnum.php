<?php

namespace Slavasamsonow\TelegramBotApi\Enums;

enum MenuButtonTypeEnum: string
{
    case Commands = 'commands';
    case WebApp = 'web_app';
    case Default = 'default';
}
