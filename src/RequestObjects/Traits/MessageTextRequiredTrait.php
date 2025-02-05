<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait MessageTextRequiredTrait
{
    use ParseModeOptionalTrait;
    use EntitiesOptionalTrait;
    use LinkPreviewOptionsOptionalTrait;

    /**
     * @var string
     */
    protected string $text;

    /**
     * @param string $text
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setText(string $text): void
    {
        if (mb_strlen($text) > 4096) {
            throw new TelegramBotApiException('Text is less than 4096 characters');
        } elseif (mb_strlen($text) < 1) {
            throw new TelegramBotApiException('Text is more than 4096 characters');
        }
        $this->text = $text;
    }
}
