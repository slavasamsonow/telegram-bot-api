<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait RequestIdRequiredTrait
{
    /**
     * @var int
     */
    protected int $requestId;

    /**
     * @param int $requestId
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setRequestId(int $requestId): void
    {
        if (
            filter_var($requestId, FILTER_VALIDATE_INT, [
                'options' => [
                    'min_range' => 1,
                    'max-range' => 2147483647,
                ],
            ]) === false
        ) {
            throw new TelegramBotApiException('requestId must be more than 1 and less than 2147483647');
        }

        $this->requestId = $requestId;
    }
}
