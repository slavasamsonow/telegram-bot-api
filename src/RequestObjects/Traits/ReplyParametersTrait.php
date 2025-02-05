<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;

trait ReplyParametersTrait
{
    use ChatIdOptionalTrait;
    use MessageIdRequiredTrait;

    /**
     * @var bool|null
     */
    protected ?bool $allowSendingWithoutReply;

    /**
     * @var string|null
     */
    protected ?string $quote;

    /**
     * @var string|null
     */
    protected ?string $quoteParseMode;

    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $quoteEntities;

    /**
     * @var int|null
     */
    protected ?int $quotePosition;

    /**
     * @param bool|null $allowSendingWithoutReply
     *
     * @return void
     */
    public function setAllowSendingWithoutReply(?bool $allowSendingWithoutReply): void
    {
        $this->allowSendingWithoutReply = $allowSendingWithoutReply;
    }

    /**
     * @param string|null $quote
     *
     * @return void
     */
    public function setQuote(?string $quote): void
    {
        $this->quote = $quote;
    }

    /**
     * @param string|null $quoteParseMode
     *
     * @return void
     */
    public function setQuoteParseMode(?string $quoteParseMode): void
    {
        $this->quoteParseMode = $quoteParseMode;
    }

    /**
     * @param array|null $quoteEntities
     *
     * @return void
     */
    public function setQuoteEntities(?array $quoteEntities): void
    {
        $this->quoteEntities = $quoteEntities;
    }

    /**
     * @param int|null $quotePosition
     *
     * @return void
     */
    public function setQuotePosition(?int $quotePosition): void
    {
        $this->quotePosition = $quotePosition;
    }
}
