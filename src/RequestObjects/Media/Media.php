<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Media;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class Media extends BaseCollectionObject
{
    /**
     * @var string|null
     */
    protected ?string $type = null;

    /**
     * @param array $medias
     *
     * @throws TelegramBotApiException
     */
    public function __construct(array $medias = [])
    {
        foreach ($medias as $media) {
            if ($media instanceof InputMediaPhoto) {
                $this->addPhoto($media);
            } elseif ($media instanceof InputMediaVideo) {
                $this->addVideo($media);
            } elseif ($media instanceof InputMediaAudio) {
                $this->addAudio($media);
            } elseif ($media instanceof InputMediaDocument) {
                $this->addDocument($media);
            } else {
                throw new TelegramBotApiException(
                    'Media must be InputMediaPhoto or InputMediaVideo or InputMediaAudio or InputMediaDocument'
                );
            }
        }
    }

    /**
     * @param InputMediaPhoto $inputMediaPhoto
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function addPhoto(InputMediaPhoto $inputMediaPhoto): void
    {
        if ($this->type == null) {
            $this->type = 'photoVideo';
        } elseif ($this->type != 'photoVideo') {
            throw new TelegramBotApiException('Type of Media must be photo or video');
        }

        $this->addMedia($inputMediaPhoto);
    }

    /**
     * @param InputMediaVideo $inputMediaVideo
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function addVideo(InputMediaVideo $inputMediaVideo): void
    {
        if ($this->type == null) {
            $this->type = 'photoVideo';
        } elseif ($this->type != 'photoVideo') {
            throw new TelegramBotApiException('Type of Media must be photo or video');
        }

        $this->addMedia($inputMediaVideo);
    }

    /**
     * @param InputMediaAudio $inputMediaAudio
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function addAudio(InputMediaAudio $inputMediaAudio): void
    {
        if ($this->type == null) {
            $this->type = 'audio';
        } elseif ($this->type != 'audio') {
            throw new TelegramBotApiException('Type of Media must be audio');
        }

        $this->addMedia($inputMediaAudio);
    }

    /**
     * @param InputMediaDocument $inputMediaDocument
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function addDocument(InputMediaDocument $inputMediaDocument): void
    {
        if ($this->type == null) {
            $this->type = 'document';
        } elseif ($this->type != 'document') {
            throw new TelegramBotApiException('Type of Media must be document');
        }

        $this->addMedia($inputMediaDocument);
    }

    /**
     * @param InputMedia $inputMedia
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function addMedia(InputMedia $inputMedia): void
    {
        if (count($this->items) > 10) {
            throw new TelegramBotApiException('Count of Media must be less than 10');
        }
        $this->addItem($inputMedia);
    }
}
