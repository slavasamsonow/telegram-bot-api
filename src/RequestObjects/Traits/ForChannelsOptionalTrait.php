<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ForChannelsOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $forChannels;

    /**
     * @param bool|null $forChannels
     *
     * @return void
     */
    public function setForChannels(?bool $forChannels): void
    {
        $this->forChannels = $forChannels;
    }
}
