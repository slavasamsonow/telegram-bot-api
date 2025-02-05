<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;

class InputMedia extends BaseRequestObject
{
    /**
     * @var InputFile|string
     */
    protected InputFile|string $media;

    /**
     * @param InputFile|string $media
     *
     * @return void
     */
    protected function setMedia(InputFile|string $media): void
    {
        if ($media instanceof InputFile) {
            $media->withAttach();
            $media->setField($media->getFileName());
        }

        $this->media = $media;
    }
}
