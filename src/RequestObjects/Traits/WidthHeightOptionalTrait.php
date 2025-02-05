<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait WidthHeightOptionalTrait
{
    /**
     * @var int|null
     */
    protected ?int $width;

    /**
     * @var int|null
     */
    protected ?int $height;


    /**
     * @param int|null $width
     *
     * @return void
     */
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }

    /**
     * @param int|null $height
     *
     * @return void
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }
}
