<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\LinkPreviewOptionsRequest;

trait LinkPreviewOptionsOptionalTrait
{
    /**
     * @var LinkPreviewOptionsRequest|null
     */
    protected ?LinkPreviewOptionsRequest $linkPreviewOptions;

    /**
     * @param LinkPreviewOptionsRequest|null $linkPreviewOptions
     *
     * @return void
     */
    public function setLinkPreviewOptions(?LinkPreviewOptionsRequest $linkPreviewOptions): void
    {
        $this->linkPreviewOptions = $linkPreviewOptions;
    }
}
