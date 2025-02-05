<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\KeyboardButtonRequestUsers;

trait RequestUsersOptionalTrait
{
    /**
     * @var KeyboardButtonRequestUsers|null
     */
    protected ?KeyboardButtonRequestUsers $requestUsers;

    /**
     * @param KeyboardButtonRequestUsers $requestUsers
     *
     * @return void
     */
    public function setRequestUsers(KeyboardButtonRequestUsers $requestUsers): void
    {
        $this->requestUsers = $requestUsers;
    }
}
