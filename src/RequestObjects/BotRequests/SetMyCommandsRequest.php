<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\MyCommandsRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\ArrayOfBotCommandsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\BotCommandScopeRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\CommandsRequiredTrait;

class SetMyCommandsRequest extends BaseRequestObject
{
    use MyCommandsRequestTrait;
    use CommandsRequiredTrait;

    /**
     * @param ArrayOfBotCommandsRequest $commands
     * @param BotCommandScopeRequest|null $scope
     * @param string|null $languageCode
     */
    public function __construct(
        ArrayOfBotCommandsRequest $commands,
        ?BotCommandScopeRequest $scope = null,
        ?string $languageCode = null
    ) {
        $this->setCommands($commands);
        $this->setScope($scope);
        $this->setLanguageCode($languageCode);
    }
}
