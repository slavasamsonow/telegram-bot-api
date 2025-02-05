<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait InlineMessageIdOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $inlineMessageId;

    /**
     * @param string|null $inlineMessageId
     *
     * @return void
     */
    public function setInlineMessageId(?string $inlineMessageId): void
    {
        $this->inlineMessageId = $inlineMessageId;
    }
}
