<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;

trait ParseModeOptionalTrait
{
    /**
     * @var ParseModeEnum|null
     */
    protected ?ParseModeEnum $parseMode;

    /**
     * @param ParseModeEnum|null $parseMode
     *
     * @return void
     */
    public function setParseMode(?ParseModeEnum $parseMode): void
    {
        $this->parseMode = $parseMode;
    }
}
