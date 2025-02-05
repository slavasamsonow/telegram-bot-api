<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\MessageEntityTypeEnum;

trait MessageEntityRequiredTrait
{
    use UrlOptionalTrait;
    use UserOptionalTrait;
    use CustomEmojiIdOptionalTrait;

    /**
     * @var MessageEntityTypeEnum
     */
    protected MessageEntityTypeEnum $type;

    /**
     * @var int
     */
    protected int $offset;

    /**
     * @var int
     */
    protected int $length;

    /**
     * @var string|null
     */
    protected ?string $language;

    /**
     * @param MessageEntityTypeEnum $type
     *
     * @return void
     */
    protected function setType(MessageEntityTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @param int $offset
     *
     * @return void
     */
    protected function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @param int $length
     *
     * @return void
     */
    protected function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @param string|null $language
     *
     * @return void
     */
    protected function setLanguage(?string $language): void
    {
        $this->language = $language;
    }
}
