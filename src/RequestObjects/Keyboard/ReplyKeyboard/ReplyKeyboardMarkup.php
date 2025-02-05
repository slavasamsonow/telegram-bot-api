<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyKeyboardTrait;

class ReplyKeyboardMarkup extends BaseRequestObject
{
    use ReplyKeyboardTrait;

    /**
     * @param Keyboard|null $keyboard
     * @param bool|null $isPersistent
     * @param bool|null $resizeKeyboard
     * @param bool|null $oneTimeKeyboard
     * @param string|null $inputFieldPlaceholder
     * @param bool|null $selective
     */
    public function __construct(
        Keyboard $keyboard = null,
        bool $isPersistent = null,
        bool $resizeKeyboard = null,
        bool $oneTimeKeyboard = null,
        string $inputFieldPlaceholder = null,
        bool $selective = null,
    ) {
        $this->setKeyboard($keyboard);
        $this->setIsPersistent($isPersistent);
        $this->setResizeKeyboard($resizeKeyboard);
        $this->setOneTimeKeyboard($oneTimeKeyboard);
        $this->setInputFieldPlaceholder($inputFieldPlaceholder);
        $this->setSelective($selective);
    }

    /**
     * @return Keyboard
     */
    public function getKeyboard(): Keyboard
    {
        return $this->keyboard;
    }
}
