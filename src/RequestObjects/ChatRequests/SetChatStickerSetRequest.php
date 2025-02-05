<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\StickerSetNameRequiredTrait;

class SetChatStickerSetRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use StickerSetNameRequiredTrait;

    /**
     * @param int|string $chatId
     * @param string $stickerSetName
     */
    public function __construct(
        int|string $chatId,
        string $stickerSetName
    ) {
        $this->setChatId($chatId);
        $this->setStickerSetName($stickerSetName);
    }
}
