<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatPhoto extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'small_file_id' => true,
        'small_file_unique_id' => true,
        'big_file_id' => true,
        'big_file_unique_id' => true,
    ];

    /**
     * @var string
     */
    protected string $smallFileId;

    /**
     * @var string
     */
    protected string $smallFileUniqueId;

    /**
     * @var string
     */
    protected string $bigFileId;

    /**
     * @var string
     */
    protected string $bigFileUniqueId;

    /**
     * @param string $smallFileId
     *
     * @return void
     */
    protected function setSmallFileId(string $smallFileId): void
    {
        $this->smallFileId = $smallFileId;
    }

    /**
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    /**
     * @param string $smallFileUniqueId
     *
     * @return void
     */
    protected function setSmallFileUniqueId(string $smallFileUniqueId): void
    {
        $this->smallFileUniqueId = $smallFileUniqueId;
    }

    /**
     * @return string
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    /**
     * @param string $bigFileId
     *
     * @return void
     */
    protected function setBigFileId(string $bigFileId): void
    {
        $this->bigFileId = $bigFileId;
    }

    /**
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    /**
     * @param string $bigFileUniqueId
     *
     * @return void
     */
    protected function setBigFileUniqueId(string $bigFileUniqueId): void
    {
        $this->bigFileUniqueId = $bigFileUniqueId;
    }

    /**
     * @return string
     */
    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }
}
