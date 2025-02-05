<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\AudioExtraTrait;

class InputMediaAudio extends InputMedia
{
    use AudioExtraTrait;

    /**
     * @var string
     */
    protected string $type = 'audio';

    /**
     * @param InputFile|string $audio
     * @param string|null $thumbnail
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param array|null $captionEntities
     * @param int|null $duration
     * @param string|null $performer
     * @param string|null $title
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        InputFile|string $audio,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?array $captionEntities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null
    ) {
        $this->setMedia($audio);
        $this->setThumbnail($thumbnail);
        try {
            $this->setCaption($caption);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create input media audio', $e->getCode(), $e);
        }
        $this->setParseMode($parseMode);
        $this->setCaptionEntities($captionEntities);
        $this->setDuration($duration);
        $this->setPerformer($performer);
        $this->setTitle($title);
    }
}
