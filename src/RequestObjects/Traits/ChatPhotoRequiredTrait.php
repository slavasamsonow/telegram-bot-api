<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait ChatPhotoRequiredTrait
{
    /**
     * @var InputFile
     */
    protected InputFile $photo;

    /**
     * @param InputFile $photo
     *
     * @return void
     */
    protected function setPhoto(InputFile $photo): void
    {
        $photo->setField('photo');
        $this->photo = $photo;
    }
}
