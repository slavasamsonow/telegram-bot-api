<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BusinessConnectionRequiredTrait;

class GetBusinessConnectionRequest extends BaseRequestObject
{
    use BusinessConnectionRequiredTrait;

    /**
     * @param string $businessConnectionId
     */
    public function __construct(string $businessConnectionId)
    {
        $this->setBusinessConnectionId($businessConnectionId);
    }
}
