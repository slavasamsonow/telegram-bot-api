<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class Audio extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'duration' => true,
        'performer' => true,
        'title' => true,
        'file_name' => true,
        'mime_type' => true,
        'file_size' => true,
        'thumbnail' => PhotoSize::class,
    ];

    /**
     * @var string
     */
    protected string $fileId;

    /**
     * @var string
     */
    protected string $fileUniqueId;

    /**
     * @var int
     */
    protected int $duration;

    /**
     * @var string|null
     */
    protected ?string $performer;

    /**
     * @var string|null
     */
    protected ?string $title;

    /**
     * @var string|null
     */
    protected ?string $file_name;

    /**
     * @var string|null
     */
    protected ?string $mime_type;

    /**
     * @var int|null
     */
    protected ?int $fileSize;

    /**
     * @var PhotoSize|null
     */
    protected ?PhotoSize $thumbnail;

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
     * @param string|null $performer
     *
     * @return void
     */
    protected function setPerformer(?string $performer): void
    {
        $this->performer = $performer;
    }

    /**
     * @return string|null
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * @param string|null $title
     *
     * @return void
     */
    protected function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $file_name
     *
     * @return void
     */
    protected function setFileName(?string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    /**
     * @param string|null $mime_type
     *
     * @return void
     */
    protected function setMimeType(?string $mime_type): void
    {
        $this->mime_type = $mime_type;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mime_type;
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
}
