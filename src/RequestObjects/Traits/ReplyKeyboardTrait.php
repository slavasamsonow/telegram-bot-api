<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\Keyboard;

trait ReplyKeyboardTrait
{
    use InputFieldPlaceholderOptionalTrait;
    use SelectiveOptionalTrait;

    /**
     * @var Keyboard
     */
    protected Keyboard $keyboard;

    /**
     * @var bool|null
     */
    protected ?bool $isPersistent;

    /**
     * @var bool|null
     */
    protected ?bool $resizeKeyboard;

    /**
     * @var bool|null
     */
    protected ?bool $oneTimeKeyboard;


    /**
     * @param Keyboard|null $keyboard
     *
     * @return void
     */
    public function setKeyboard(?Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param bool|null $isPersistent
     *
     * @return void
     */
    public function setIsPersistent(?bool $isPersistent): void
    {
        $this->isPersistent = $isPersistent;
    }

    /**
     * @param bool|null $resizeKeyboard
     *
     * @return void
     */
    public function setResizeKeyboard(?bool $resizeKeyboard): void
    {
        $this->resizeKeyboard = $resizeKeyboard;
    }

    /**
     * @param bool|null $oneTimeKeyboard
     *
     * @return void
     */
    public function setOneTimeKeyboard(?bool $oneTimeKeyboard): void
    {
        $this->oneTimeKeyboard = $oneTimeKeyboard;
    }
}
