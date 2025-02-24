<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BotShortDescription extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'short_description' => true,
    ];

    /**
     * @var string
     */
    public readonly string $shortDescription;


    /**
     * @param string $shortDescription
     *
     * @return void
     */
    protected function setShortDescription(string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
