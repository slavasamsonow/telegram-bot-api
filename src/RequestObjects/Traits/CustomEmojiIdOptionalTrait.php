<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait CustomEmojiIdOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $customEmojiId;

    /**
     * @param string|null $customEmojiId
     *
     * @return void
     */
    protected function setCustomEmojiId(?string $customEmojiId): void
    {
        $this->customEmojiId = $customEmojiId;
    }
}
