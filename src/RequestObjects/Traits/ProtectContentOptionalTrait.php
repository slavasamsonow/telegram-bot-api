<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ProtectContentOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $protectContent;

    /**
     * @param bool|null $protectContent
     *
     * @return void
     */
    public function setProtectContent(?bool $protectContent): void
    {
        $this->protectContent = $protectContent;
    }
}
