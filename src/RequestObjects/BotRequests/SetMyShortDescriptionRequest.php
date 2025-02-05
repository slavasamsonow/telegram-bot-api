<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BotShortDescriptionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LanguageCodeOptionalTrait;

class SetMyShortDescriptionRequest extends BaseRequestObject
{
    use LanguageCodeOptionalTrait;
    use BotShortDescriptionOptionalTrait;

    /**
     * @param string|null $shortDescription
     * @param string|null $languageCode
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        ?string $shortDescription = null,
        ?string $languageCode = null
    ) {
        try {
            $this->setShortDescription($shortDescription);
            $this->setLanguageCode($languageCode);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create set bot description request', $e->getCode(), $e);
        }
    }
}
