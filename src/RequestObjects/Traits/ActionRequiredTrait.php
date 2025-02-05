<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\ChatActionEnum;

trait ActionRequiredTrait
{
    /**
     * @var ChatActionEnum
     */
    protected ChatActionEnum $action;

    /**
     * @param ChatActionEnum $action
     *
     * @return void
     */
    protected function setAction(ChatActionEnum $action): void
    {
        $this->action = $action;
    }
}
