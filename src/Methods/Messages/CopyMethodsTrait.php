<?php

namespace Slavasamsonow\TelegramBotApi\Methods\Messages;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\CopyRequests\CopyMessageRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\CopyRequests\CopyMessagesRequest;

trait CopyMethodsTrait
{
    /**
     * @param CopyMessageRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function copyMessage(CopyMessageRequest $request): array
    {
        return $this->post('copyMessage', $request)['result'];
    }

    /**
     * @param CopyMessagesRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function copyMessages(CopyMessagesRequest $request): array
    {
        return $this->post('copyMessages', $request)['result'];
    }
}
