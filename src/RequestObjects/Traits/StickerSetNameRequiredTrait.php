<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait StickerSetNameRequiredTrait
{
    /**
     * @var string
     */
    protected string $stickerSetName;

    /**
     * @param string $stickerSetName
     *
     * @return void
     */
    protected function setStickerSetName(string $stickerSetName): void
    {
        $this->stickerSetName = $stickerSetName;
    }
}
