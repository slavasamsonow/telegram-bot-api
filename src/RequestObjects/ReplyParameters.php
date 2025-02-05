<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects;

use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ReplyParametersTrait;

class ReplyParameters extends BaseRequestObject
{
    use ReplyParametersTrait;

    /**
     * @param int $messageId
     * @param int|string|null $chatId
     * @param bool|null $allowSendingWithoutReply
     * @param string|null $quote
     * @param string|null $quoteParseMode
     * @param ArrayOfMessageEntitiesRequest|null $quoteEntities
     * @param int|null $quotePosition
     */
    public function __construct(
        int $messageId,
        null|int|string $chatId = null,
        ?bool $allowSendingWithoutReply = null,
        ?string $quote = null,
        ?string $quoteParseMode = null,
        ?ArrayOfMessageEntitiesRequest $quoteEntities = null,
        ?int $quotePosition = null
    ) {
        $this->setMessageId($messageId);
        $this->setChatId($chatId);
        $this->setAllowSendingWithoutReply($allowSendingWithoutReply);
        $this->setQuote($quote);
        $this->setQuoteParseMode($quoteParseMode);
        $this->setQuoteEntities($quoteEntities);
        $this->setQuotePosition($quotePosition);
    }
}
