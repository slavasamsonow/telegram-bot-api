<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\BotRequests\BotCommand;

use Slavasamsonow\TelegramBotApi\Enums\BotCommandScopeTypeEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatIdRequiredTrait;

class BotCommandScopeRequest extends BaseRequestObject
{
    use ChatIdRequiredTrait;

    /**
     * @var BotCommandScopeTypeEnum
     */
    protected BotCommandScopeTypeEnum $type;

    /**
     * @var int
     */
    protected int $userId;

    protected function __construct()
    {
    }

    /**
     * @return BotCommandScopeRequest
     */
    public static function createDefault(): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::Default);
        return $scope;
    }

    /**
     * @return BotCommandScopeRequest
     */
    public static function createAllPrivateChats(): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::AllPrivateChats);
        return $scope;
    }

    /**
     * @return BotCommandScopeRequest
     */
    public static function createAllGroupChats(): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::AllGroupChats);
        return $scope;
    }

    /**
     * @return BotCommandScopeRequest
     */
    public static function createAllChatAdministrators(): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::AllChatAdministrators);
        return $scope;
    }

    /**
     * @param int|string $chatId
     *
     * @return BotCommandScopeRequest
     */
    public static function createChat(int|string $chatId): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::Chat);
        $scope->setChatId($chatId);
        return $scope;
    }

    /**
     * @param int|string $chatId
     *
     * @return BotCommandScopeRequest
     */
    public static function createChatAdministrators(int|string $chatId): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::ChatAdministrators);
        $scope->setChatId($chatId);
        return $scope;
    }

    /**
     * @param int|string $chatId
     * @param int $userId
     *
     * @return BotCommandScopeRequest
     */
    public static function createChatMember(int|string $chatId, int $userId): BotCommandScopeRequest
    {
        $scope = new self();
        $scope->setType(BotCommandScopeTypeEnum::ChatAdministrators);
        $scope->setChatId($chatId);
        $scope->setUserId($userId);
        return $scope;
    }

    /**
     * @param BotCommandScopeTypeEnum $type
     *
     * @return void
     */
    protected function setType(BotCommandScopeTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @param int $userId
     *
     * @return void
     */
    protected function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }
}
