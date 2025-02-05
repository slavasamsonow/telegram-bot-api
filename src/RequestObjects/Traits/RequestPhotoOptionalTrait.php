<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait RequestPhotoOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $requestPhoto;

    /**
     * @param bool|null $requestPhoto
     *
     * @return void
     */
    public function setRequestPhoto(?bool $requestPhoto): void
    {
        $this->requestPhoto = $requestPhoto;
    }
}
