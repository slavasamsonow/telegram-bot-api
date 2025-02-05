<?php

namespace Slavasamsonow\TelegramBotApi;

class InputFileCollection
{
    /**
     * @var array
     */
    protected static array $items = [];

    protected function __construct()
    {
    }

    /**
     * @param InputFile $item
     *
     * @return void
     */
    public static function addItem(InputFile $item): void
    {
        self::$items[] = $item;
    }

    /**
     * @return array
     */
    public static function getItems(): array
    {
        return self::$items;
    }
}
