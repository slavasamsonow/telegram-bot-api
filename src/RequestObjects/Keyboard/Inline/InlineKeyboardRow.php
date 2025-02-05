<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class InlineKeyboardRow extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = InlineKeyboardButton::class;

    /**
     * @param array $buttons
     */
    public function __construct(array $buttons = [])
    {
        foreach ($buttons as $button) {
            $this->addButton($button);
        }
    }

    /**
     * @return array
     */
    public function getButtons(): array
    {
        return $this->items;
    }

    /**
     * @param InlineKeyboardButton $inlineKeyboardButton
     *
     * @return void
     */
    public function addButton(InlineKeyboardButton $inlineKeyboardButton): void
    {
        $this->addItem($inlineKeyboardButton);
    }
}
