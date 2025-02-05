<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class Keyboard extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = KeyboardRow::class;

    /**
     * @param array $rows
     */
    public function __construct(array $rows = [])
    {
        foreach ($rows as $row) {
            $this->addRow($row);
        }
    }

    /**
     * @return array
     */
    public function getRows(): array
    {
        return $this->items;
    }

    /**
     * @param KeyboardRow $keyboardRow
     *
     * @return void
     */
    public function addRow(KeyboardRow $keyboardRow): void
    {
        $this->addItem($keyboardRow);
    }
}
