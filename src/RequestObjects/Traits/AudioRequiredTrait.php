<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait AudioRequiredTrait
{
    use AudioExtraTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $audio;

    /**
     * @param InputFile|string $audio
     *
     * @return void
     */
    protected function setAudio(InputFile|string $audio): void
    {
        if ($audio instanceof InputFile) {
            $audio->setField('audio');
        }

        $this->audio = $audio;
    }
}
