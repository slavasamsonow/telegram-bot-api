<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BotName extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'name' => true,
    ];

    /**
     * @var string
     */
    public readonly string $name;


    /**
     * @param string $name
     *
     * @return void
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
