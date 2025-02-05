<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\KeyboardTextTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RequestChatOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RequestContactOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RequestLocationOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RequestPollOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\RequestUsersOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\WebAppOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\WebAppInfo;

class KeyboardButton extends BaseRequestObject
{
    use KeyboardTextTrait;
    use RequestUsersOptionalTrait;
    use RequestChatOptionalTrait;
    use RequestContactOptionalTrait;
    use RequestLocationOptionalTrait;
    use RequestPollOptionalTrait;
    use WebAppOptionalTrait;

    private function __construct()
    {
    }

    /**
     * @param $text
     *
     * @return KeyboardButton
     */
    public static function createTextButton($text): KeyboardButton
    {
        $button = new self();
        $button->setText($text);
        return $button;
    }

    /**
     * @param string $text
     * @param KeyboardButtonRequestUsers $requestUsers
     *
     * @return KeyboardButton
     */
    public static function createRequestUsersButton(
        string $text,
        KeyboardButtonRequestUsers $requestUsers,
    ): KeyboardButton {
        $button = new self();
        $button->setText($text);
        $button->setRequestUsers($requestUsers);
        return $button;
    }

    /**
     * @param string $text
     * @param KeyboardButtonRequestChat $requestChat
     *
     * @return KeyboardButton
     */
    public static function createRequestChatButton(
        string $text,
        KeyboardButtonRequestChat $requestChat,
    ): KeyboardButton {
        $button = new self();
        $button->setText($text);
        $button->setRequestChat($requestChat);
        return $button;
    }

    /**
     * @param string $text
     *
     * @return KeyboardButton
     */
    public static function createRequestContactButton(string $text): KeyboardButton
    {
        $button = new self();
        $button->setText($text);
        $button->setRequestContact(true);
        return $button;
    }

    /**
     * @param string $text
     *
     * @return KeyboardButton
     */
    public static function createRequestLocationButton(string $text): KeyboardButton
    {
        $button = new self();
        $button->setText($text);
        $button->setRequestLocation(true);
        return $button;
    }

    /**
     * @param string $text
     * @param KeyboardButtonPollType|null $pollType
     *
     * @return KeyboardButton
     */
    public static function createRequestPollButton(
        string $text,
        ?KeyboardButtonPollType $pollType = null,
    ): KeyboardButton {
        $button = new self();
        $button->setText($text);
        if ($pollType === null) {
            $pollType = new KeyboardButtonPollType();
        }
        $button->setRequestPoll($pollType);
        return $button;
    }

    /**
     * @param string $text
     * @param WebAppInfo|string $webApp
     *
     * @return KeyboardButton
     * @throws TelegramBotApiException
     */
    public static function createWebAppButton(string $text, WebAppInfo|string $webApp): KeyboardButton
    {
        $button = new self();
        $button->setText($text);
        if (is_string($webApp)) {
            try {
                $webApp = new WebAppInfo($webApp);
            } catch (TelegramBotApiException $e) {
                throw new TelegramBotApiException('Error create keyboard web app button', $e->getCode(), $e);
            }
        }
        $button->setWebApp($webApp);
        return $button;
    }
}
