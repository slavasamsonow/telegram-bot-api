<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait VideoNoteRequiredTrait
{
    use DurationOptionalTrait;
    use ThumbnailOptionalTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $videoNote;

    /**
     * @var int|null
     */
    protected ?int $length;


    /**
     * @param InputFile|string $videoNote
     *
     * @return void
     */
    protected function setVideoNote(InputFile|string $videoNote): void
    {
        if ($videoNote instanceof InputFile) {
            $videoNote->setField('video_note');
        }

        $this->videoNote = $videoNote;
    }

    /**
     * @param int|null $length
     *
     * @return void
     */
    public function setLength(?int $length): void
    {
        $this->length = $length;
    }
}
