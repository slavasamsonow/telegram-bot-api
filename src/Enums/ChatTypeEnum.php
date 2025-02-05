<?php

namespace Slavasamsonow\TelegramBotApi\Enums;

enum ChatTypeEnum: string
{
    case Private = 'private';
    case Group = 'group';
    case Supergroup = 'supergroup';
    case Channel = 'channel';
}
