<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RemoveKeyboardRequiredTrait
{
    /**
     * @var bool
     */
    protected bool $removeKeyboard;

    /**
     * @param bool $removeKeyboard
     *
     * @return void
     */
    protected function setRemoveKeyboard(bool $removeKeyboard): void
    {
        $this->removeKeyboard = $removeKeyboard;
    }
}
