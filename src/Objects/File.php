<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class File extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'file_size' => true,
        'file_path' => true,
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
    public readonly int $fileSize;

    /**
     * @var string
     */
    public readonly string $filePath;


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
     * @param int $fileSize
     *
     * @return void
     */
    protected function setFileSize(int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @param string $filePath
     *
     * @return void
     */
    protected function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }
}
