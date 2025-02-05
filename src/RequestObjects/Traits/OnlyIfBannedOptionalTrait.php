<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait OnlyIfBannedOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $onlyIfBanned;

    /**
     * @param bool|null $onlyIfBanned
     *
     * @return void
     */
    public function setOnlyIfBanned(?bool $onlyIfBanned): void
    {
        $this->onlyIfBanned = $onlyIfBanned;
    }
}
