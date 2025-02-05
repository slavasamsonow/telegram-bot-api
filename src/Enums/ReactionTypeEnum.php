<?php

namespace Slavasamsonow\TelegramBotApi\Enums;

enum ReactionTypeEnum: string
{
    case Emoji = 'emoji';
    case CustomEmoji = 'custom_emoji';
    case Paid = 'paid';
}
