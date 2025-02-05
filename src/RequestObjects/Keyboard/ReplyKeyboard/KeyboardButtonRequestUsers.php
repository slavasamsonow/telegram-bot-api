<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ButtonRequestUserTrait;

class KeyboardButtonRequestUsers extends BaseRequestObject
{
    use ButtonRequestUserTrait;

    /**
     * @param int $requestId
     * @param bool|null $userIsBot
     * @param bool|null $userIsPremium
     * @param int|null $maxQuantity
     * @param bool|null $requestName
     * @param bool|null $requestUsername
     * @param bool|null $requestPhoto
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int $requestId,
        bool $userIsBot = null,
        bool $userIsPremium = null,
        int $maxQuantity = null,
        bool $requestName = null,
        bool $requestUsername = null,
        bool $requestPhoto = null,
    ) {
        try {
            $this->setRequestId($requestId);
            $this->setUserIsBot($userIsBot);
            $this->setUserIsPremium($userIsPremium);
            $this->setMaxQuantity($maxQuantity);
            $this->setRequestName($requestName);
            $this->setRequestUsername($requestUsername);
            $this->setRequestPhoto($requestPhoto);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create keyboard button request users', $e->getCode(), $e);
        }
    }
}
