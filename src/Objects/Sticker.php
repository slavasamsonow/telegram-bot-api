<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\StickerTypeEnum;

class Sticker extends BaseTelegramObject
{
    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'type' => StickerTypeEnum::class,
        'width' => true,
        'height' => true,
        'is_animated' => true,
        'is_video' => true,
        'thumbnail' => PhotoSize::class,
        'emoji' => true,
        'set_name' => true,
        'premium_animation' => File::class,
        'mask_position' => MaskPosition::class,
        'custom_emoji_id' => true,
        'needs_repainting' => true,
        'file_size' => true,
    ];

    /**
     * @var string
     */
    public readonly string $fileId;

    /**
     * @var string
     */
    public readonly string $fileUniqueId;

    /**
     * @var StickerTypeEnum
     */
    public readonly StickerTypeEnum $type;

    /**
     * @var int
     */
    public readonly int $width;

    /**
     * @var int
     */
    public readonly int $height;

    /**
     * @var bool
     */
    public readonly bool $isAnimated;

    /**
     * @var bool
     */
    public readonly bool $isVideo;

    /**
     * @var PhotoSize|null
     */
    public readonly ?PhotoSize $thumbnail;

    /**
     * @var string|null
     */
    public readonly ?string $emoji;

    /**
     * @var string|null
     */
    public readonly ?string $setName;

    /**
     * @var File|null
     */
    public readonly ?File $premiumAnimation;

    /**
     * @var MaskPosition|null
     */
    public readonly ?MaskPosition $maskPosition;

    /**
     * @var string|null
     */
    public readonly ?string $customEmojiId;

    /**
     * @var bool|null
     */
    public readonly ?bool $needsRepainting;

    /**
     * @var int|null
     */
    public readonly ?int $fileSize;


    /**
     * @param string $fileId
     *
     * @return void
     */
    protected function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
    }

    /**
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * @param string $fileUniqueId
     *
     * @return void
     */
    protected function setFileUniqueId(string $fileUniqueId): void
    {
        $this->fileUniqueId = $fileUniqueId;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * @param StickerTypeEnum $type
     *
     * @return void
     */
    protected function setType(StickerTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return StickerTypeEnum
     */
    public function getType(): StickerTypeEnum
    {
        return $this->type;
    }

    /**
     * @param int $width
     *
     * @return void
     */
    protected function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $height
     *
     * @return void
     */
    protected function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param bool $isAnimated
     *
     * @return void
     */
    protected function setIsAnimated(bool $isAnimated): void
    {
        $this->isAnimated = $isAnimated;
    }

    /**
     * @return bool
     */
    public function isAnimated(): bool
    {
        return $this->isAnimated;
    }

    /**
     * @param bool $isVideo
     *
     * @return void
     */
    protected function setIsVideo(bool $isVideo): void
    {
        $this->isVideo = $isVideo;
    }

    /**
     * @return bool
     */
    public function isVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * @param PhotoSize|null $thumbnail
     *
     * @return void
     */
    protected function setThumbnail(?PhotoSize $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return PhotoSize|null
     */
    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
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
     * @param string|null $setName
     *
     * @return void
     */
    protected function setSetName(?string $setName): void
    {
        $this->setName = $setName;
    }

    /**
     * @return string|null
     */
    public function getSetName(): ?string
    {
        return $this->setName;
    }

    /**
     * @param File|null $premiumAnimation
     *
     * @return void
     */
    protected function setPremiumAnimation(?File $premiumAnimation): void
    {
        $this->premiumAnimation = $premiumAnimation;
    }

    /**
     * @return File|null
     */
    public function getPremiumAnimation(): ?File
    {
        return $this->premiumAnimation;
    }

    /**
     * @param MaskPosition|null $maskPosition
     *
     * @return void
     */
    protected function setMaskPosition(?MaskPosition $maskPosition): void
    {
        $this->maskPosition = $maskPosition;
    }

    /**
     * @return MaskPosition|null
     */
    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
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

    /**
     * @param bool|null $needsRepainting
     *
     * @return void
     */
    protected function setNeedsRepainting(?bool $needsRepainting): void
    {
        $this->needsRepainting = $needsRepainting;
    }

    /**
     * @return bool|null
     */
    public function getNeedsRepainting(): ?bool
    {
        return $this->needsRepainting;
    }

    /**
     * @param int|null $fileSize
     *
     * @return void
     */
    protected function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
