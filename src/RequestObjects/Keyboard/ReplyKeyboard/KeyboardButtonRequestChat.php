<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard\ReplyKeyboard;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ButtonRequestChatTrait;

class KeyboardButtonRequestChat
{
    use ButtonRequestChatTrait;

    /**
     * @param int $requestId
     * @param bool $chatIsChannel
     * @param bool|null $chatIsForum
     * @param bool|null $chatHasUsername
     * @param bool|null $chatIsCreated
     * @param bool|null $botIsMember
     * @param bool|null $requestTitle
     * @param bool|null $requestUsername
     * @param bool|null $requestPhoto
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        int $requestId,
        bool $chatIsChannel,
        bool $chatIsForum = null,
        bool $chatHasUsername = null,
        bool $chatIsCreated = null,
        bool $botIsMember = null,
        bool $requestTitle = null,
        bool $requestUsername = null,
        bool $requestPhoto = null,
    ) {
        try {
            $this->setRequestId($requestId);
            $this->setChatIsChannel($chatIsChannel);
            $this->setChatIsForum($chatIsForum);
            $this->setChatHasUsername($chatHasUsername);
            $this->setChatIsCreated($chatIsCreated);
            $this->setBotIsMember($botIsMember);
            $this->setRequestTitle($requestTitle);
            $this->setRequestUsername($requestUsername);
            $this->setRequestPhoto($requestPhoto);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create keyboard button request chat', $e->getCode(), $e);
        }
    }
}
