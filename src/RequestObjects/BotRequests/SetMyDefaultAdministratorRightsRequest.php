<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatAdministratorRightOptionalTrait;

class SetMyDefaultAdministratorRightsRequest extends BaseRequestObject
{
    use ChatAdministratorRightOptionalTrait;

    /**
     * @param ChatAdministratorRightsRequest|null $rights
     * @param bool|null $forChannels
     */
    public function __construct(
        ?ChatAdministratorRightsRequest $rights = null,
        ?bool $forChannels = null
    ) {
        $this->setRights($rights);
        $this->setForChannels($forChannels);
    }
}
