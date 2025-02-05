<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard\KeyboardButtonPollType;

trait RequestPollOptionalTrait
{
    /**
     * @var KeyboardButtonPollType|null
     */
    protected ?KeyboardButtonPollType $requestPoll;

    /**
     * @param KeyboardButtonPollType $requestPoll
     *
     * @return void
     */
    public function setRequestPoll(KeyboardButtonPollType $requestPoll): void
    {
        $this->requestPoll = $requestPoll;
    }
}
