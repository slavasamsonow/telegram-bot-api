<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\BotCommandScopeRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LanguageCodeOptionalTrait;

trait MyCommandsRequestTrait
{
    use LanguageCodeOptionalTrait;

    /**
     * @var BotCommandScopeRequest|null
     */
    protected ?BotCommandScopeRequest $scope;

    /**
     * @param BotCommandScopeRequest|null $scope
     *
     * @return void
     */
    protected function setScope(?BotCommandScopeRequest $scope): void
    {
        $this->scope = $scope;
    }
}
