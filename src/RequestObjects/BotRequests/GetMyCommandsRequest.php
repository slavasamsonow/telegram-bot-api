<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\MyCommandsRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\BotCommandScopeRequest;

class GetMyCommandsRequest extends BaseRequestObject
{
    use MyCommandsRequestTrait;

    /**
     * @param BotCommandScopeRequest|null $scope
     * @param string|null $languageCode
     */
    public function __construct(
        ?BotCommandScopeRequest $scope = null,
        ?string $languageCode = null
    ) {
        $this->setScope($scope);
        $this->setLanguageCode($languageCode);
    }
}
