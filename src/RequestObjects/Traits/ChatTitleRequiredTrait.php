<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait ChatTitleRequiredTrait
{
    /**
     * @var string
     */
    protected string $title;

    /**
     * @param string $title
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setTitle(string $title): void
    {
        $length = mb_strlen($title);
        if ($length < 1) {
            throw new TelegramBotApiException('Title of chat must be more than 1 characters');
        } elseif ($length > 128) {
            throw new TelegramBotApiException('Title of chat must be less than 128 characters');
        }
        $this->title = $title;
    }
}
