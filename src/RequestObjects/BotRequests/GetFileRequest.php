<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\FileIdRequiredTrait;

class GetFileRequest extends BaseRequestObject
{
    use FileIdRequiredTrait;

    /**
     * @param string $fileId
     */
    public function __construct(string $fileId)
    {
        $this->setFilId($fileId);
    }
}
