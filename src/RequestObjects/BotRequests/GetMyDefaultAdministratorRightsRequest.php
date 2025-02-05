<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ForChannelsOptionalTrait;

class GetMyDefaultAdministratorRightsRequest extends BaseRequestObject
{
    use ForChannelsOptionalTrait;

    /**
     * @param bool|null $forChannels
     */
    public function __construct(
        ?bool $forChannels = null
    ) {
        $this->setForChannels($forChannels);
    }
}
