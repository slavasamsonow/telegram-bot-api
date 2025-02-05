<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\MenuButtonRequest;

trait MenuButtonOptionalTrait
{
    /**
     * @var MenuButtonRequest|null
     */
    protected ?MenuButtonRequest $menuButton;

    /**
     * @param MenuButtonRequest|null $menuButton
     *
     * @return void
     */
    public function setMenuButton(?MenuButtonRequest $menuButton): void
    {
        $this->menuButton = $menuButton;
    }
}
