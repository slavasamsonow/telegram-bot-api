<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SwitchInlineQueryOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $switchInlineQuery;

    /**
     * @var string|null
     */
    protected ?string $switchInlineQueryCurrentChat;

    /**
     * @param string|null $switchInlineQuery
     *
     * @return void
     */
    public function setSwitchInlineQuery(?string $switchInlineQuery): void
    {
        $this->switchInlineQuery = $switchInlineQuery;
    }

    /**
     * @param string|null $switchInlineQueryCurrentChat
     *
     * @return void
     */
    public function setSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): void
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
    }
}
