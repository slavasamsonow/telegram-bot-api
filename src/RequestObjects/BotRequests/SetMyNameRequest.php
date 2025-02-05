<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BotNameOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LanguageCodeOptionalTrait;

class SetMyNameRequest extends BaseRequestObject
{
    use LanguageCodeOptionalTrait;
    use BotNameOptionalTrait;

    /**
     * @param string|null $name
     * @param string|null $languageCode
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        ?string $name = null,
        ?string $languageCode = null
    ) {
        try {
            $this->setName($name);
            $this->setLanguageCode($languageCode);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create set bot name request', $e->getCode(), $e);
        }
    }
}
