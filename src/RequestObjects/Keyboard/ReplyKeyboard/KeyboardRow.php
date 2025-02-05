<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class KeyboardRow extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = KeyboardButton::class;

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
     * @param KeyboardButton $keyboardButton
     *
     * @return void
     */
    public function addButton(KeyboardButton $keyboardButton): void
    {
        $this->addItem($keyboardButton);
    }
}
