<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait LoginUrlTrait
{
    use UrlRequiredTrait;

    /**
     * @var string|null
     */
    protected ?string $forwardText;

    /**
     * @var string|null
     */
    protected ?string $botUsername;

    /**
     * @var bool|null
     */
    protected ?bool $requestWriteAccess;


    /**
     * @param string|null $forwardText
     *
     * @return void
     */
    public function setForwardText(?string $forwardText): void
    {
        $this->forwardText = $forwardText;
    }

    /**
     * @param string|null $botUsername
     *
     * @return void
     */
    public function setBotUsername(?string $botUsername): void
    {
        $this->botUsername = $botUsername;
    }

    /**
     * @param bool|null $requestWriteAccess
     *
     * @return void
     */
    public function setRequestWriteAccess(?bool $requestWriteAccess): void
    {
        $this->requestWriteAccess = $requestWriteAccess;
    }
}
