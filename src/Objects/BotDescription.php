<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BotDescription extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'description' => true,
    ];

    /**
     * @var string
     */
    protected string $description;

    /**
     * @param string $description
     *
     * @return void
     */
    protected function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
