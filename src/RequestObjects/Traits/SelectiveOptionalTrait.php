<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait SelectiveOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $selective;


    /**
     * @param bool|null $selective
     *
     * @return void
     */
    public function setSelective(?bool $selective): void
    {
        $this->selective = $selective;
    }
}
