<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfBotCommands;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\BotDescription;
use Slavasamsonow\TelegramBotApi\Objects\BotName;
use Slavasamsonow\TelegramBotApi\Objects\BotShortDescription;
use Slavasamsonow\TelegramBotApi\Objects\BusinessConnection;
use Slavasamsonow\TelegramBotApi\Objects\ChatAdministratorRights;
use Slavasamsonow\TelegramBotApi\Objects\File;
use Slavasamsonow\TelegramBotApi\Objects\MenuButton;
use Slavasamsonow\TelegramBotApi\Objects\User;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand\ArrayOfBotCommandsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\DeleteMyCommandsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetBusinessConnectionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetChatMenuButtonRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetFileRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetMyCommandsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetMyDefaultAdministratorRightsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetMyDescriptionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetMyNameRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\GetMyShortDescriptionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetChatMenuButtonRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetMyCommandsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetMyDefaultAdministratorRightsRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetMyDescriptionRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetMyNameRequest;
use Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\SetMyShortDescriptionRequest;

trait BotMethods
{
    /**
     * @return User
     * @throws TelegramBotApiException
     */
    public function getMe(): User
    {
        return User::fromResponse($this->get('getMe')['result']);
    }

    // TODO: getUserProfilePhotos

    // TODO: setUserEmojiStatus

    // TODO: answerCallbackQuery

    /**
     * @param GetFileRequest $request
     *
     * @return File
     * @throws TelegramBotApiException
     */
    public function getFile(GetFileRequest $request): File
    {
        return File::fromResponse($this->post('getFile', $request)['result']);
    }

    /**
     * @param GetFileRequest $request
     *
     * @return string
     * @throws TelegramBotApiException
     */
    public function getFileUrl(GetFileRequest $request): string
    {
        $file = $this->getFile($request);
        return $this->fileEndpoint . $file->fileId;
    }

    /**
     * @param GetBusinessConnectionRequest $request
     *
     * @return BusinessConnection
     * @throws TelegramBotApiException
     */
    public function getBusinessConnection(GetBusinessConnectionRequest $request): BusinessConnection
    {
        return BusinessConnection::fromResponse($this->post('getBusinessConnection', $request)['result']);
    }

    /**
     * @param SetMyCommandsRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setMyCommands(SetMyCommandsRequest $request): array
    {
        return $this->post('setMyCommands', $request);
    }

    /**
     * @param DeleteMyCommandsRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function deleteMyCommands(DeleteMyCommandsRequest $request): array
    {
        return $this->post('deleteMyCommands', $request);
    }

    /**
     * @param GetMyCommandsRequest $request
     *
     * @return ArrayOfBotCommands
     * @throws TelegramBotApiException
     */
    public function getMyCommands(GetMyCommandsRequest $request): ArrayOfBotCommands
    {
        return ArrayOfBotCommands::fromResponse($this->post('getMyCommands', $request)['result']);
    }

    /**
     * @param SetMyNameRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setMyName(SetMyNameRequest $request): array
    {
        return $this->post('setMyName', $request);
    }

    /**
     * @param GetMyNameRequest $request
     *
     * @return BotName
     * @throws TelegramBotApiException
     */
    public function getMyName(GetMyNameRequest $request): BotName
    {
        return BotName::fromResponse($this->post('getMyName', $request)['result']);
    }

    /**
     * @param SetMyDescriptionRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setMyDescription(SetMyDescriptionRequest $request): array
    {
        return $this->post('setMyDescription', $request);
    }

    /**
     * @param GetMyDescriptionRequest $request
     *
     * @return BotDescription
     * @throws TelegramBotApiException
     */
    public function getMyDescription(GetMyDescriptionRequest $request): BotDescription
    {
        return BotDescription::fromResponse($this->post('getMyDescription', $request)['result']);
    }

    /**
     * @param SetMyShortDescriptionRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setMyShortDescription(SetMyShortDescriptionRequest $request): array
    {
        return $this->post('setMyShortDescription', $request);
    }

    /**
     * @param GetMyShortDescriptionRequest $request
     *
     * @return BotShortDescription
     * @throws TelegramBotApiException
     */
    public function getMyShortDescription(GetMyShortDescriptionRequest $request): BotShortDescription
    {
        return BotShortDescription::fromResponse($this->post('getMyShortDescription', $request)['result']);
    }

    /**
     * @param SetChatMenuButtonRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setChatMenuButton(SetChatMenuButtonRequest $request): array
    {
        return $this->post('setChatMenuButton', $request);
    }

    /**
     * @param GetChatMenuButtonRequest $request
     *
     * @return MenuButton
     * @throws TelegramBotApiException
     */
    public function getChatMenuButton(GetChatMenuButtonRequest $request): MenuButton
    {
        return MenuButton::fromResponse($this->post('getChatMenuButton', $request)['result']);
    }

    /**
     * @param SetMyDefaultAdministratorRightsRequest $request
     *
     * @return array
     * @throws TelegramBotApiException
     */
    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRightsRequest $request): array
    {
        return $this->post('setMyDefaultAdministratorRights', $request);
    }

    /**
     * @param GetMyDefaultAdministratorRightsRequest $request
     *
     * @return ChatAdministratorRights
     * @throws TelegramBotApiException
     */
    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsRequest $request
    ): ChatAdministratorRights {
        return ChatAdministratorRights::fromResponse(
            $this->post('getMyDefaultAdministratorRights', $request)['result']
        );
    }
}
