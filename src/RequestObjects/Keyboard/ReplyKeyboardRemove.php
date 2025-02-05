<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RemoveKeyboardRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SelectiveOptionalTrait;

class ReplyKeyboardRemove extends BaseRequestObject
{
    use RemoveKeyboardRequiredTrait;
    use SelectiveOptionalTrait;

    /**
     * @param bool $removeKeyboard
     * @param bool|null $selective
     */
    public function __construct(
        bool $removeKeyboard,
        ?bool $selective = null
    ) {
        $this->setRemoveKeyboard($removeKeyboard);
        $this->setSelective($selective);
    }
}
