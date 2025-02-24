<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\MessageEntityTypeEnum;

class MessageEntity extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'type' => MessageEntityTypeEnum::class,
        'offset' => true,
        'length' => true,
        'url' => true,
        'user' => User::class,
        'language' => true,
        'custom_emoji_id' => true,
    ];

    /**
     * @var MessageEntityTypeEnum
     */
    public readonly MessageEntityTypeEnum $type;

    /**
     * @var int
     */
    public readonly int $offset;

    /**
     * @var int
     */
    public readonly int $length;

    /**
     * @var string|null
     */
    public readonly ?string $url;

    /**
     * @var User|null
     */
    public readonly ?User $user;

    /**
     * @var string|null
     */
    public readonly ?string $language;

    /**
     * @var string|null
     */
    public readonly ?string $customEmojiId;


    /**
     * @return MessageEntityTypeEnum
     */
    public function getType(): MessageEntityTypeEnum
    {
        return $this->type;
    }

    /**
     * @param MessageEntityTypeEnum $type
     *
     * @return void
     */
    public function setType(MessageEntityTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return void
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     *
     * @return void
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     *
     * @return void
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     *
     * @return void
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }

    /**
     * @param string|null $customEmojiId
     *
     * @return void
     */
    public function setCustomEmojiId(?string $customEmojiId): void
    {
        $this->customEmojiId = $customEmojiId;
    }
}
