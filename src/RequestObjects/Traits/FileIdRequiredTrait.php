<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait FileIdRequiredTrait
{
    /**
     * @var string
     */
    protected string $fileId;

    /**
     * @param string $fileId
     *
     * @return void
     */
    protected function setFilId(string $fileId): void
    {
        $this->fileId = $fileId;
    }
}
