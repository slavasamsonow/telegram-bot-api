<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait AudioExtraTrait
{
    use DurationOptionalTrait;
    use ThumbnailOptionalTrait;
    use CaptionOptionalRequestTrait;

    /**
     * @var string|null
     */
    protected ?string $performer;

    /**
     * @var string|null
     */
    protected ?string $title;

    /**
     * @param string|null $performer
     *
     * @return void
     */
    public function setPerformer(?string $performer): void
    {
        $this->performer = $performer;
    }

    /**
     * @param string|null $title
     *
     * @return void
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
}
