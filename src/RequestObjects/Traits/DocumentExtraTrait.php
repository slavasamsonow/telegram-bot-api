<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait DocumentExtraTrait
{
    use ThumbnailOptionalTrait;
    use CaptionOptionalRequestTrait;

    /**
     * @var bool|null
     */
    protected ?bool $disableContentTypeDetection;

    /**
     * @param bool|null $disableContentTypeDetection
     *
     * @return void
     */
    public function setDisableContentTypeDetection(?bool $disableContentTypeDetection): void
    {
        $this->disableContentTypeDetection = $disableContentTypeDetection;
    }
}
