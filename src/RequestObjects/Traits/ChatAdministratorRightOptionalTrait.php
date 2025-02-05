<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\ChatAdministratorRightsRequest;

trait ChatAdministratorRightOptionalTrait
{
    use ForChannelsOptionalTrait;

    /**
     * @var ChatAdministratorRightsRequest|null
     */
    protected ?ChatAdministratorRightsRequest $rights;

    /**
     * @param ChatAdministratorRightsRequest|null $rights
     *
     * @return void
     */
    public function setRights(?ChatAdministratorRightsRequest $rights): void
    {
        $this->rights = $rights;
    }
}
