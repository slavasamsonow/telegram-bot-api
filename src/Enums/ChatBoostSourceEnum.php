<?php

namespace Slavasamsonow\TelegramBotApi\Enums;

enum ChatBoostSourceEnum: string
{
    case Premium = 'premium';
    case GiftCode = 'gift_code';
    case Giveaway = 'giveaway';
}
