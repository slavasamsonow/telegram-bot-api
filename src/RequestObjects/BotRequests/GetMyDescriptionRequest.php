<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\LanguageCodeOptionalTrait;

class GetMyDescriptionRequest extends BaseRequestObject
{
    use LanguageCodeOptionalTrait;

    /**
     * @param string|null $languageCode
     */
    public function __construct(
        ?string $languageCode = null
    ) {
        $this->setLanguageCode($languageCode);
    }
}
