<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait PhotoRequiredTrait
{
    use PhotoExtraTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $photo;

    /**
     * @param InputFile|string $photo
     *
     * @return void
     */
    protected function setPhoto(InputFile|string $photo): void
    {
        if ($photo instanceof InputFile) {
            $photo->setField('photo');
        }

        $this->photo = $photo;
    }
}
