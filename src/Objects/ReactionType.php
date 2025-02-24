<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\ReactionTypeEnum;

class ReactionType extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'type' => ReactionTypeEnum::class,
        'emoji' => true,
        'custom_emoji_id' => true,
    ];

    /**
     * @var ReactionTypeEnum
     */
    public readonly ReactionTypeEnum $type;

    /**
     * @var string|null
     */
    public readonly ?string $emoji;

    /**
     * @var string|null
     */
    public readonly ?string $customEmojiId;


    /**
     * @param ReactionTypeEnum $type
     *
     * @return void
     */
    protected function setType(ReactionTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ReactionTypeEnum
     */
    public function getType(): ReactionTypeEnum
    {
        return $this->type;
    }

    /**
     * @param string|null $emoji
     *
     * @return void
     */
    protected function setEmoji(?string $emoji): void
    {
        $this->emoji = $emoji;
    }

    /**
     * @return string|null
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @param string|null $customEmojiId
     *
     * @return void
     */
    protected function setCustomEmojiId(?string $customEmojiId): void
    {
        $this->customEmojiId = $customEmojiId;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }
}
