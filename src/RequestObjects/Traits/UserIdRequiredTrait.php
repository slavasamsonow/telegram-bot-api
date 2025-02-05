<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait UserIdRequiredTrait
{
    /**
     * @var int
     */
    protected int $userId;

    /**
     * @param int $userId
     *
     * @return void
     */
    protected function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}
