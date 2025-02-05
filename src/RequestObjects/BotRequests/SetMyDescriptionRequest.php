<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\BotDescriptionOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LanguageCodeOptionalTrait;

class SetMyDescriptionRequest extends BaseRequestObject
{
    use LanguageCodeOptionalTrait;
    use BotDescriptionOptionalTrait;

    /**
     * @param string|null $description
     * @param string|null $languageCode
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        ?string $description = null,
        ?string $languageCode = null
    ) {
        try {
            $this->setDescription($description);
            $this->setLanguageCode($languageCode);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create set bot description request', $e->getCode(), $e);
        }
    }
}
