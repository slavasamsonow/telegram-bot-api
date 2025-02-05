<?php

namespace Slavasamsonow\TelegramBotApi\Methods\Messages;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\Message;
use Slavasamsonow\TelegramBotApi\RequestObjects\ForwardRequests\ForwardMessageRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ForwardRequests\ForwardMessagesRequest;

trait ForwardMethodsTrait
{
    /**
     * @param ForwardMessageRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function forwardMessage(ForwardMessageRequest $request): Message
    {
        return Message::fromResponse($this->post('forwardMessage', $request)['result']);
    }

    /**
     * @param ForwardMessagesRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function forwardMessages(ForwardMessagesRequest $request): array
    {
        // TODO: return array of Messages
        return $this->post('forwardMessages', $request)['result'];
    }
}
