<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class InlineKeyboard extends BaseCollectionObject
{
    /**
     * @var string
     *
     */
    protected static string $innerValuesType = InlineKeyboardRow::class;

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
     * @param InlineKeyboardRow $inlineKeyboardRow
     *
     * @return void
     */
    public function addRow(InlineKeyboardRow $inlineKeyboardRow): void
    {
        $this->addItem($inlineKeyboardRow);
    }
}
