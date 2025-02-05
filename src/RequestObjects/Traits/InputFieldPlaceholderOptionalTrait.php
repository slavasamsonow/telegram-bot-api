<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait InputFieldPlaceholderOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $inputFieldPlaceholder;

    /**
     * @param string|null $inputFieldPlaceholder
     *
     * @return void
     */
    public function setInputFieldPlaceholder(?string $inputFieldPlaceholder): void
    {
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;
    }
}
