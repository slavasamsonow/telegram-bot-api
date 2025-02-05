<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait ThumbnailOptionalTrait
{
    /**
     * @var InputFile|string|null
     */
    protected null|InputFile|string $thumbnail;

    /**
     * @param InputFile|string|null $thumbnail
     *
     * @return void
     */
    public function setThumbnail(null|InputFile|string $thumbnail): void
    {
        if ($thumbnail instanceof InputFile) {
            $thumbnail->withAttach();
            $thumbnail->setField($thumbnail->getFileName());
        }

        $this->thumbnail = $thumbnail;
    }
}
