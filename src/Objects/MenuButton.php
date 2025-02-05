<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\MenuButtonTypeEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\WebAppInfo;

class MenuButton extends BaseTelegramObject
{
    // TODO: separate by type

    /**
     * @var array
     */
    protected static array $map = [
        'type' => MenuButtonTypeEnum::class,
        'text' => true,
        'web_app' => WebAppInfo::class,
    ];

    /**
     * @var MenuButtonTypeEnum
     */
    protected MenuButtonTypeEnum $type;

    /**
     * @var string|null
     */
    protected ?string $text;

    /**
     * @var WebAppInfo|null
     */
    protected ?WebAppInfo $webApp;

    /**
     * @param MenuButtonTypeEnum $type
     *
     * @return void
     */
    protected function setType(MenuButtonTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return MenuButtonTypeEnum
     */
    public function getType(): MenuButtonTypeEnum
    {
        return $this->type;
    }

    /**
     * @param string|null $text
     *
     * @return void
     */
    protected function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param WebAppInfo|null $webApp
     *
     * @return void
     */
    protected function setWebApp(?WebAppInfo $webApp): void
    {
        $this->webApp = $webApp;
    }

    /**
     * @return WebAppInfo|null
     */
    public function getWebApp(): ?WebAppInfo
    {
        return $this->webApp;
    }
}
