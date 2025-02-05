<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\Inline;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\LoginUrl;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\CallbackDataOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\KeyboardTextTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LoginUrlOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SwitchInlineQueryOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UrlOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\WebAppOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\WebAppInfo;

class InlineKeyboardButton extends BaseRequestObject
{
    use KeyboardTextTrait;
    use UrlOptionalTrait;
    use CallbackDataOptionalTrait;
    use WebAppOptionalTrait;
    use LoginUrlOptionalTrait;
    use SwitchInlineQueryOptionalTrait;

    // TODO: switch_inline_query_chosen_chat
    // TODO: copy_text
    // TODO: callback_game
    // TODO: pay

    private function __construct()
    {
    }

    /**
     * @param string $text
     * @param string $url
     *
     * @return static
     * @throws TelegramBotApiException
     */
    public static function createUrlButton(string $text, string $url): static
    {
        try {
            $button = new self();
            $button->setText($text);
            $button->setUrl($url);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create inline keyboard url button', $e->getCode(), $e);
        }
        return $button;
    }

    /**
     * @param string $text
     * @param string $callbackData
     *
     * @return InlineKeyboardButton
     * @throws TelegramBotApiException
     */
    public static function createCallbackDataButton(string $text, string $callbackData): InlineKeyboardButton
    {
        $button = new self();
        $button->setText($text);
        try {
            $button->setCallbackData($callbackData);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create inline keyboard callback data button', $e->getCode(), $e);
        }
        return $button;
    }

    /**
     * @param string $text
     * @param WebAppInfo|string $webApp
     *
     * @return InlineKeyboardButton
     * @throws TelegramBotApiException
     */
    public static function createWebAppButton(string $text, WebAppInfo|string $webApp): InlineKeyboardButton
    {
        $button = new self();
        $button->setText($text);
        if (is_string($webApp)) {
            try {
                $webApp = new WebAppInfo($webApp);
            } catch (TelegramBotApiException $e) {
                throw new TelegramBotApiException('Error create inline keyboard web app button', $e->getCode(), $e);
            }
        }
        $button->setWebApp($webApp);
        return $button;
    }

    /**
     * @param string $text
     * @param LoginUrl $loginUrl
     *
     * @return InlineKeyboardButton
     */
    public static function createLoginUrlButton(string $text, LoginUrl $loginUrl): InlineKeyboardButton
    {
        $button = new self();
        $button->setText($text);
        $button->setLoginUrl($loginUrl);
        return $button;
    }
}
