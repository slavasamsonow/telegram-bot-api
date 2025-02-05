<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;

trait CaptionOptionalRequestTrait
{
    use ParseModeOptionalTrait;

    /**
     * @var string|null
     */
    protected ?string $caption;

    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $captionEntities;


    /**
     * @param string|null $caption
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setCaption(?string $caption): void
    {
        if ($caption != null && mb_strlen($caption) > 1024) {
            throw new TelegramBotApiException('Caption must less than 1024 characters');
        }
        $this->caption = $caption;
    }

    /**
     * @param ArrayOfMessageEntitiesRequest|null $captionEntities
     *
     * @return void
     */
    public function setCaptionEntities(?ArrayOfMessageEntitiesRequest $captionEntities): void
    {
        $this->captionEntities = $captionEntities;
    }
}
