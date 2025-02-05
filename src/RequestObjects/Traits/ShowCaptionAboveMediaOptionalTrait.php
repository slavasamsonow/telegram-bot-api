<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ShowCaptionAboveMediaOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $showCaptionAboveMedia;

    /**
     * @param bool|null $showCaptionAboveMedia
     *
     * @return void
     */
    public function setShowCaptionAboveMedia(?bool $showCaptionAboveMedia): void
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;
    }
}
