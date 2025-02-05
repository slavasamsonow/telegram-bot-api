<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MenuButtonOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UserChatIdOptionalTrait;

class SetChatMenuButtonRequest extends BaseRequestObject
{
    use UserChatIdOptionalTrait;
    use MenuButtonOptionalTrait;

    /**
     * @param int|null $chatId
     * @param MenuButtonRequest|null $menuButton
     */
    public function __construct(
        ?int $chatId = null,
        ?MenuButtonRequest $menuButton = null
    ) {
        $this->setChatId($chatId);
        $this->setMenuButton($menuButton);
    }
}
