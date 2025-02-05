<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait HasSpoilerOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $hasSpoiler;

    /**
     * @param bool|null $hasSpoiler
     *
     * @return void
     */
    public function setHasSpoiler(?bool $hasSpoiler): void
    {
        $this->hasSpoiler = $hasSpoiler;
    }
}
