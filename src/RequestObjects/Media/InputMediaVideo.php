<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\VideoExtraTrait;

class InputMediaVideo extends InputMedia
{
    use VideoExtraTrait;

    /**
     * @var string
     */
    protected string $type = 'video';

    /**
     * @param InputFile|string $video
     * @param string|null $thumbnail
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param array|null $captionEntities
     * @param bool|null $showCaptionAboveMedia
     * @param int|null $width
     * @param int|null $height
     * @param int|null $duration
     * @param bool|null $supportsStreaming
     * @param bool|null $hasSpoiler
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        InputFile|string $video,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?int $width = null,
        ?int $height = null,
        ?int $duration = null,
        ?bool $supportsStreaming = null,
        ?bool $hasSpoiler = null
    ) {
        $this->setMedia($video);
        $this->setThumbnail($thumbnail);
        try {
            $this->setCaption($caption);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create input media video', $e->getCode(), $e);
        }
        $this->setParseMode($parseMode);
        $this->setCaptionEntities($captionEntities);
        $this->setShowCaptionAboveMedia($showCaptionAboveMedia);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setDuration($duration);
        $this->setSupportsStreaming($supportsStreaming);
        $this->setHasSpoiler($hasSpoiler);
    }
}
