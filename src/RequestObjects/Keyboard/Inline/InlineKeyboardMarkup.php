<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;

class InlineKeyboardMarkup extends BaseRequestObject
{
    /**
     * @var InlineKeyboard
     */
    protected InlineKeyboard $inlineKeyboard;

    /**
     * @param InlineKeyboard $inlineKeyboardRows
     */
    public function __construct(InlineKeyboard $inlineKeyboardRows)
    {
        $this->setInlineKeyboardRows($inlineKeyboardRows);
    }

    /**
     * @return InlineKeyboard
     */
    public function getInlineKeyboardRows(): InlineKeyboard
    {
        return $this->inlineKeyboard;
    }

    /**
     * @param InlineKeyboard $inlineKeyboardRows
     *
     * @return void
     */
    public function setInlineKeyboardRows(InlineKeyboard $inlineKeyboardRows): void
    {
        $this->inlineKeyboard = $inlineKeyboardRows;
    }
}
