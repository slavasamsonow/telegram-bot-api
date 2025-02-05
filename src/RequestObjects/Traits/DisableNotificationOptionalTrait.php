<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait DisableNotificationOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $disableNotification;

    /**
     * @param bool|null $disableNotification
     *
     * @return void
     */
    public function setDisableNotification(?bool $disableNotification): void
    {
        $this->disableNotification = $disableNotification;
    }
}
