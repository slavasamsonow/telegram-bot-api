<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class VideoNote extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'length' => true,
        'duration' => true,
        'thumbnail' => PhotoSize::class,
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
    public readonly int $length;

    /**
     * @var int
     */
    public readonly int $duration;

    /**
     * @var PhotoSize|null
     */
    public readonly ?PhotoSize $thumbnail;

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
     * @param int $length
     *
     * @return void
     */
    protected function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
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
