<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\ChatPermissions;

trait PermissionsRequiredTrait
{
    /**
     * @var ChatPermissions
     */
    protected ChatPermissions $permissions;

    /**
     * @var bool|null
     */
    protected ?bool $useIndependentChatPermissions;


    /**
     * @param ChatPermissions $permissions
     *
     * @return void
     */
    protected function setPermissions(ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * @param bool|null $useIndependentChatPermissions
     *
     * @return void
     */
    public function setUseIndependentChatPermissions(?bool $useIndependentChatPermissions): void
    {
        $this->useIndependentChatPermissions = $useIndependentChatPermissions;
    }
}
