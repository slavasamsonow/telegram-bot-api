<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatDescriptionOptionalTrait;

class SetChatDescriptionRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use ChatDescriptionOptionalTrait;

    /**
     * @param int|string $chatId
     * @param string|null $description
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int|string $chatId,
        ?string $description = null
    ) {
        try {
            $this->setChatId($chatId);
            $this->setDescription($description);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create set chat description request', $e->getCode(), $e);
        }
    }
}
