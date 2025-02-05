<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait VideoRequiredTrait
{
    use VideoExtraTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $video;


    /**
     * @param InputFile|string $video
     *
     * @return void
     */
    protected function setVideo(InputFile|string $video): void
    {
        if ($video instanceof InputFile) {
            $video->setField('video');
        }

        $this->video = $video;
    }
}
