<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class Video extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'width' => true,
        'height' => true,
        'duration' => true,
        'thumbnail' => PhotoSize::class,
        'file_name' => true,
        'mime_type' => true,
        'file_size' => true,
    ];

    /**
     * @var string
     */
    public readonly string $fileId;

    /**
     * @var string
     */
    public readonly string $fileUniqueId;

    /**
     * @var int
     */
    public readonly int $width;

    /**
     * @var int
     */
    public readonly int $height;

    /**
     * @var int
     */
    public readonly int $duration;

    /**
     * @var PhotoSize|null
     */
    public readonly ?PhotoSize $thumbnail;

    /**
     * @var string|null
     */
    public readonly ?string $fileName;

    /**
     * @var string|null
     */
    public readonly ?string $mimeType;

    /**
     * @var int|null
     */
    public readonly ?int $fileSize;


    /**
     * @param string $fileId
     *
     * @return void
     */
    protected function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileUniqueId
     *
     * @return void
     */
    protected function setFileUniqueId(string $fileUniqueId): void
    {
        $this->fileUniqueId = $fileUniqueId;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * @param int $width
     *
     * @return void
     */
    protected function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $height
     *
     * @return void
     */
    protected function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $duration
     *
     * @return void
     */
    protected function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param PhotoSize|null $thumbnail
     *
     * @return void
     */
    protected function setThumbnail(?PhotoSize $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    /**
     * @param string|null $fileName
     *
     * @return void
     */
    protected function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $mimeType
     *
     * @return void
     */
    protected function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @param int|null $fileSize
     *
     * @return void
     */
    protected function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
