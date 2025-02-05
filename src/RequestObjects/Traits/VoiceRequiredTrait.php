<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait VoiceRequiredTrait
{
    use DurationOptionalTrait;
    use CaptionOptionalRequestTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $voice;


    /**
     * @param InputFile|string $voice
     *
     * @return void
     */
    protected function setVoice(InputFile|string $voice): void
    {
        if ($voice instanceof InputFile) {
            $voice->setField('voice');
        }

        $this->voice = $voice;
    }
}
