<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ShowAboveTextOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $showAboveText;

    /**
     * @param bool|null $showAboveText
     *
     * @return void
     */
    public function setShowAboveText(?bool $showAboveText): void
    {
        $this->showAboveText = $showAboveText;
    }
}
