<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait LanguageCodeOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $languageCode;

    /**
     * @param string $languageCode
     *
     * @return void
     */
    protected function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }
}
