<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RemoveCaptionOptionalRequestTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $removeCaption;

    /**
     * @param bool|null $removeCaption
     *
     * @return void
     */
    public function setRemoveCaption(?bool $removeCaption): void
    {
        $this->removeCaption = $removeCaption;
    }
}
