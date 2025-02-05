<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\Enums\PollTypeEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PollTypeOptionalTrait;

class KeyboardButtonPollType extends BaseRequestObject
{
    use PollTypeOptionalTrait;

    /**
     * @param PollTypeEnum|null $type
     */
    public function __construct(PollTypeEnum $type = null)
    {
        $this->setType($type);
    }
}
