<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SupportsStreamingOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $supportsStreaming;

    /**
     * @param bool|null $supportsStreaming
     *
     * @return void
     */
    public function setSupportsStreaming(?bool $supportsStreaming): void
    {
        $this->supportsStreaming = $supportsStreaming;
    }
}
