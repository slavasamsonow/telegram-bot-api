<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait CustomTitleRequiredTrait
{
    /**
     * @var string
     */
    protected string $customTitle;

    /**
     * @param string $customTitle
     *
     * @return void
     */
    protected function setCustomTitle(string $customTitle): void
    {
        $this->customTitle = $customTitle;
    }
}
