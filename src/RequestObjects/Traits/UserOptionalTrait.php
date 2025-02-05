<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Objects\User;

trait UserOptionalTrait
{
    /**
     * @var User|null
     */
    // TODO: change to request object
    protected ?User $user;

    /**
     * @param User|null $user
     *
     * @return void
     */
    protected function setUser(?User $user): void
    {
        $this->user = $user;
    }
}
