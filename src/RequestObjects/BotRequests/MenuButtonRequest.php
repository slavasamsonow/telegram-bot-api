<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\Enums\MenuButtonTypeEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MenuButtonTextOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MenuButtonTypeRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\WebAppOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\WebAppInfo;

class MenuButtonRequest extends BaseRequestObject
{
    use MenuButtonTypeRequiredTrait;
    use MenuButtonTextOptionalTrait;
    use WebAppOptionalTrait;


    protected function __construct()
    {
    }

    /**
     * @return MenuButtonRequest
     */
    public static function createCommands(): MenuButtonRequest
    {
        $menuButton = new self();
        $menuButton->setType(MenuButtonTypeEnum::Commands);
        return $menuButton;
    }

    /**
     * @param string $text
     * @param WebAppInfo $webApp
     *
     * @return MenuButtonRequest
     */
    public static function createWebApp(string $text, WebAppInfo $webApp): MenuButtonRequest
    {
        $menuButton = new self();
        $menuButton->setType(MenuButtonTypeEnum::WebApp);
        $menuButton->setText($text);
        $menuButton->setWebApp($webApp);
        return $menuButton;
    }

    /**
     * @return MenuButtonRequest
     */
    public static function createDefault(): MenuButtonRequest
    {
        $menuButton = new self();
        $menuButton->setType(MenuButtonTypeEnum::Default);
        return $menuButton;
    }
}
