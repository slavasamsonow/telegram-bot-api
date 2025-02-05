<?php

namespace Slavasamsonow\TelegramBotApi\Methods\Messages;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfMessages;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\Message;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendAudioRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendChatActionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendDocumentRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendMediaGroupRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendMessageRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendPhotoRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendVideoNoteRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendVideoRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\SendRequests\SendVoiceRequest;

trait SendMethodsTrait
{
    /**
     * @param SendMessageRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendMessage(SendMessageRequest $request): Message
    {
        return Message::fromResponse($this->post('sendMessage', $request)['result']);
    }

    /**
     * @param SendPhotoRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendPhoto(SendPhotoRequest $request): Message
    {
        return Message::fromResponse($this->post('sendPhoto', $request)['result']);
    }

    /**
     * @param SendAudioRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendAudio(SendAudioRequest $request): Message
    {
        return Message::fromResponse($this->post('sendAudio', $request)['result']);
    }

    /**
     * @param SendDocumentRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendDocument(SendDocumentRequest $request): Message
    {
        return Message::fromResponse($this->post('sendDocument', $request)['result']);
    }

    /**
     * @param SendVideoRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendVideo(SendVideoRequest $request): Message
    {
        return Message::fromResponse($this->post('sendVideo', $request)['result']);
    }

    //TODO: sendAnimation

    /**
     * @param SendVoiceRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendVoice(SendVoiceRequest $request): Message
    {
        return Message::fromResponse($this->post('sendVoice', $request)['result']);
    }

    /**
     * @param SendVideoNoteRequest $request
     *
     * @return Message
     * @throws TelegramBotApiException
     */
    public function sendVideoNote(SendVideoNoteRequest $request): Message
    {
        return Message::fromResponse($this->post('sendVideoNote', $request)['result']);
    }

    // TODO: sendPaidMedia

    /**
     * @param SendMediaGroupRequest $request
     *
     * @return ArrayOfMessages
     * @throws TelegramBotApiException
     */
    public function sendMediaGroup(SendMediaGroupRequest $request): ArrayOfMessages
    {
        $response = $this->post('sendMediaGroup', $request)['result'];

        $messages = new ArrayOfMessages();
        foreach ($response as $message) {
            $messages->addMessage(Message::fromResponse($message));
        }
        return $messages;
    }

    // TODO: sendLocation
    // TODO: sendVenue
    // TODO: sendContact
    // TODO: sendPoll
    // TODO: sendDice

    /**
     * @param SendChatActionRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function sendChatAction(SendChatActionRequest $request): array
    {
        return $this->post('sendChatAction', $request);
    }

    // TODO: setMessageReaction
}
