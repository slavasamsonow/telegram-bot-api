<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\MenuButtonTypeEnum;

trait MenuButtonTypeRequiredTrait
{
    /**
     * @var MenuButtonTypeEnum
     */
    protected MenuButtonTypeEnum $type;

    /**
     * @param MenuButtonTypeEnum $type
     *
     * @return void
     */
    protected function setType(MenuButtonTypeEnum $type): void
    {
        $this->type = $type;
    }
}
