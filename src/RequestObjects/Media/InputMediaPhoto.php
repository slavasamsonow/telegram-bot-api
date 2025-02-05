<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PhotoExtraTrait;

class InputMediaPhoto extends InputMedia
{
    use PhotoExtraTrait;

    /**
     * @var string
     */
    protected string $type = 'photo';

    /**
     * @param InputFile|string $photo
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param array|null $captionEntities
     * @param bool|null $showCaptionAboveMedia
     * @param bool|null $hasSpoiler
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        InputFile|string $photo,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $hasSpoiler = null
    ) {
        $this->setMedia($photo);
        try {
            $this->setCaption($caption);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create input media photo', $e->getCode(), $e);
        }
        $this->setParseMode($parseMode);
        $this->setCaptionEntities($captionEntities);
        $this->setShowCaptionAboveMedia($showCaptionAboveMedia);
        $this->setHasSpoiler($hasSpoiler);
    }
}
