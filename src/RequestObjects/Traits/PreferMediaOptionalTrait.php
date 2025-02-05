<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait PreferMediaOptionalTrait
{
    /**
     * @var bool|null
     */
    protected ?bool $preferSmallMedia;
    /**
     * @var bool|null
     */
    protected ?bool $preferLargeMedia;

    /**
     * @param bool|null $preferSmallMedia
     *
     * @return void
     */
    public function setPreferSmallMedia(?bool $preferSmallMedia): void
    {
        $this->preferSmallMedia = $preferSmallMedia;
    }

    /**
     * @param bool|null $preferLargeMedia
     *
     * @return void
     */
    public function setPreferLargeMedia(?bool $preferLargeMedia): void
    {
        $this->preferLargeMedia = $preferLargeMedia;
    }
}
