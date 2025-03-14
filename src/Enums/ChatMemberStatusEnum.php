<?php

namespace Slavasamsonow\TelegramBotApi\Enums;

enum ChatMemberStatusEnum: string
{
    case Creator = 'creator';
    case Administrator = 'administrator';
    case Member = 'member';
    case Restricted = 'restricted';
    case Left = 'left';
    case Kicked = 'kicked';
}
