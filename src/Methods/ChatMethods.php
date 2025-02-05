<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\ChatFullInfo;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\DeleteChatPhotoRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\DeleteChatStickerSetRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\GetChatRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\LeaveChatRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\PinChatMessageRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\SetChatDescriptionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\SetChatPermissionsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\SetChatPhotoRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\SetChatStickerSetRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\SetChatTitleRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\UnpinAllChatMessagesRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests\UnpinChatMessageRequest;

trait ChatMethods
{
    /**
     * @param SetChatPermissionsRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatPermissions(SetChatPermissionsRequest $request): array
    {
        return $this->post('setChatPermissions', $request);
    }

    /**
     * @param SetChatPhotoRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatPhoto(SetChatPhotoRequest $request): array
    {
        return $this->post('setChatPhoto', $request);
    }

    /**
     * @param DeleteChatPhotoRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function deleteChatPhoto(DeleteChatPhotoRequest $request): array
    {
        return $this->post('deleteChatPhoto', $request);
    }

    /**
     * @param SetChatTitleRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatTitle(SetChatTitleRequest $request): array
    {
        return $this->post('setChatTitle', $request);
    }

    /**
     * @param SetChatDescriptionRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatDescription(SetChatDescriptionRequest $request): array
    {
        return $this->post('setChatDescription', $request);
    }

    /**
     * @param PinChatMessageRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function pinChatMessage(PinChatMessageRequest $request): array
    {
        return $this->post('pinChatMessage', $request);
    }

    /**
     * @param UnpinChatMessageRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function unpinChatMessage(UnpinChatMessageRequest $request): array
    {
        return $this->post('unpinChatMessage', $request);
    }

    /**
     * @param UnpinAllChatMessagesRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function unpinAllChatMessages(UnpinAllChatMessagesRequest $request): array
    {
        return $this->post('unpinAllChatMessages', $request);
    }

    /**
     * @param LeaveChatRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function leaveChat(LeaveChatRequest $request): array
    {
        return $this->post('leaveChat', $request);
    }

    /**
     * @param GetChatRequest $request
     *
     * @return ChatFullInfo
     * @throws TelegramBotApiException
     */
    public function getChat(GetChatRequest $request): ChatFullInfo
    {
        return ChatFullInfo::fromResponse($this->post('getChat', $request));
    }

    /**
     * @param SetChatStickerSetRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatStickerSet(SetChatStickerSetRequest $request): array
    {
        return $this->post('setChatStickerSet', $request);
    }

    /**
     * @param DeleteChatStickerSetRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function deleteChatStickerSet(DeleteChatStickerSetRequest $request): array
    {
        return $this->post('deleteChatStickerSet', $request);
    }
}
