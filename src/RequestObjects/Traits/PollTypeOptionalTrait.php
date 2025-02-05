<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\PollTypeEnum;

trait PollTypeOptionalTrait
{
    /**
     * @var PollTypeEnum|null
     */
    protected ?PollTypeEnum $type;

    /**
     * @param PollTypeEnum|null $type
     *
     * @return void
     */
    public function setType(?PollTypeEnum $type): void
    {
        $this->type = $type;
    }
}
