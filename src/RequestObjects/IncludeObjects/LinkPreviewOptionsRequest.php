<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\IsDisabledOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\PreferMediaOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ShowAboveTextOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\UrlOptionalTrait;

class LinkPreviewOptionsRequest extends BaseRequestObject
{
    use IsDisabledOptionalTrait;
    use UrlOptionalTrait;
    use PreferMediaOptionalTrait;
    use ShowAboveTextOptionalTrait;

    /**
     * @param bool|null $isDisabled
     * @param string|null $url
     * @param bool|null $preferSmallMedia
     * @param bool|null $preferLargeMedia
     * @param bool|null $showAboveText
     *
     * @throws TelegramBotApiException
     */
    public function __construct(
        ?bool $isDisabled = null,
        ?string $url = null,
        ?bool $preferSmallMedia = null,
        ?bool $preferLargeMedia = null,
        ?bool $showAboveText = null
    ) {
        try {
            $this->setIsDisabled($isDisabled);
            $this->setUrl($url);
            $this->setPreferSmallMedia($preferSmallMedia);
            $this->setPreferLargeMedia($preferLargeMedia);
            $this->setShowAboveText($showAboveText);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create link preview option request', $e->getCode(), $e);
        }
    }
}
