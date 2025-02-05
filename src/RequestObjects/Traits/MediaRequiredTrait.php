<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\Media\InputMedia;

trait MediaRequiredTrait
{
    /**
     * @var InputMedia
     */
    protected InputMedia $media;

    /**
     * @param InputMedia $media
     *
     * @return void
     */
    protected function setMedia(InputMedia $media): void
    {
        $this->media = $media;
    }
}
