<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\ChatRequests;

use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequests\ChatRequestTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ChatPhotoRequiredTrait;

class SetChatPhotoRequest extends BaseRequestObject
{
    use ChatRequestTrait;
    use ChatPhotoRequiredTrait;

    /**
     * @param int|string $chatId
     * @param InputFile $photo
     */
    public function __construct(
        int|string $chatId,
        InputFile $photo
    ) {
        $this->setChatId($chatId);
        $this->setPhoto($photo);
    }
}
