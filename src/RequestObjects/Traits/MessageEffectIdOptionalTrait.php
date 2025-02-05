<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait MessageEffectIdOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $messageEffectId;

    /**
     * @param string|null $messageEffectId
     *
     * @return void
     */
    public function setMessageEffectId(?string $messageEffectId): void
    {
        $this->messageEffectId = $messageEffectId;
    }
}
