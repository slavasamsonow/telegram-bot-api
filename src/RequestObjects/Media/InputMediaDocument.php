<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\DocumentExtraTrait;

class InputMediaDocument extends InputMedia
{
    use DocumentExtraTrait;

    /**
     * @var string
     */
    protected string $type = 'document';

    /**
     * @param InputFile|string $document
     * @param string|null $thumbnail
     * @param string|null $caption
     * @param ParseModeEnum|null $parseMode
     * @param array|null $captionEntities
     * @param bool|null $disableContentTypeDetection
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        InputFile|string $document,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?ParseModeEnum $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableContentTypeDetection = null
    ) {
        $this->setMedia($document);
        $this->setThumbnail($thumbnail);
        try {
            $this->setCaption($caption);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create input media document', $e->getCode(), $e);
        }
        $this->setParseMode($parseMode);
        $this->setCaptionEntities($captionEntities);
        $this->setDisableContentTypeDetection($disableContentTypeDetection);
    }
}
