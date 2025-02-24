<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class Document extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
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
