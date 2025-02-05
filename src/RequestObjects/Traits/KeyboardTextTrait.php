<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait KeyboardTextTrait
{
    /**
     * @var string
     */
    protected string $text;

    /**
     * @param string $text
     *
     * @return void
     */
    protected function setText(string $text): void
    {
        $this->text = $text;
    }
}
