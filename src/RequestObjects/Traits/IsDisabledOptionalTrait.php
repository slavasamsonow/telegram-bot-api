<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait IsDisabledOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $isDisabled;

    /**
     * @param bool|null $isDisabled
     *
     * @return void
     */
    public function setIsDisabled(?bool $isDisabled): void
    {
        $this->isDisabled = $isDisabled;
    }
}
