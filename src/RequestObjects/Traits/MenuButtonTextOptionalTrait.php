<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait MenuButtonTextOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $text;

    /**
     * @param string|null $text
     *
     * @return void
     */
    protected function setText(?string $text): void
    {
        $this->text = $text;
    }
}
