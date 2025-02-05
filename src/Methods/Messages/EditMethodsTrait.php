<?php

namespace Slavasamsonow\TelegramBotApi\Methods\Messages;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\Poll;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\DeleteMessageRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\DeleteMessagesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\EditMessageCaptionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\EditMessageMediaRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\EditMessageReplyMarkupRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\EditMessageTextRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\EditMessageRequests\StopPollRequest;

trait EditMethodsTrait
{
    /**
     * @param EditMessageTextRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function editMessageText(EditMessageTextRequest $request): array
    {
        return $this->post('editMessageText', $request);
    }

    /**
     * @param EditMessageCaptionRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function editMessageCaption(EditMessageCaptionRequest $request): array
    {
        return $this->post('editMessageCaption', $request);
    }

    /**
     * @param EditMessageMediaRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function editMessageMedia(EditMessageMediaRequest $request): array
    {
        return $this->post('editMessageMedia', $request);
    }

    // TODO: editMessageLiveLocation

    // TODO: stopMessageLiveLocation

    /**
     * @param EditMessageReplyMarkupRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function editMessageReplyMarkup(EditMessageReplyMarkupRequest $request): array
    {
        return $this->post('editMessageReplyMarkup', $request);
    }

    /**
     * @param StopPollRequest $request
     *
     * @return Poll
     * @throws TelegramBotApiException
     */
    public function stopPoll(StopPollRequest $request): Poll
    {
        return Poll::fromResponse($this->post('stopPoll', $request)['result']);
    }

    /**
     * @param DeleteMessageRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function deleteMessage(DeleteMessageRequest $request): array
    {
        return $this->post('deleteMessage', $request);
    }

    /**
     * @param DeleteMessagesRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function deleteMessages(DeleteMessagesRequest $request): array
    {
        return $this->post('deleteMessages', $request);
    }
}
