<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\KeyboardButtonRequestChat;

trait RequestChatOptionalTrait
{
    /**
     * @var KeyboardButtonRequestChat|null
     */
    protected ?KeyboardButtonRequestChat $requestChat;

    /**
     * @param KeyboardButtonRequestChat $requestChat
     *
     * @return void
     */
    public function setRequestChat(KeyboardButtonRequestChat $requestChat): void
    {
        $this->requestChat = $requestChat;
    }
}
