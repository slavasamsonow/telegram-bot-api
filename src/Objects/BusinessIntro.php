<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BusinessIntro
{
    /**
     * @var array
     */
    protected static array $map = [
        'title' => true,
        'message' => true,
        'sticker' => Sticker::class,
    ];

    /**
     * @var string|null
     */
    protected ?string $title;

    /**
     * @var string|null
     */
    protected ?string $message;

    /**
     * @var Sticker|null
     */
    protected ?Sticker $sticker;

    /**
     * @param string|null $title
     *
     * @return void
     */
    protected function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $message
     *
     * @return void
     */
    protected function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param Sticker|null $sticker
     *
     * @return void
     */
    protected function setSticker(?Sticker $sticker): void
    {
        $this->sticker = $sticker;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }
}
