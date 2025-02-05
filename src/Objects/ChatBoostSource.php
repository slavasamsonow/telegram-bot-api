<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\Enums\ChatBoostSourceEnum;

class ChatBoostSource extends BaseTelegramObject
{
    // TODO: separate by source

    /**
     * @var array
     */
    protected static array $map = [
        'source' => ChatBoostSourceEnum::class,
        'user' => User::class,
        'giveaway_message_id' => true,
        'prize_star_count' => true,
        'is_unclaimed' => true,
    ];

    /**
     * @var ChatBoostSourceEnum
     */
    protected ChatBoostSourceEnum $source;

    /**
     * @var User
     */
    protected User $user;

    /**
     * @var int|null
     */
    protected ?int $giveawayMessageId;

    /**
     * @var int|null
     */
    protected ?int $prizeStarCount;

    /**
     * @var bool|null
     */
    protected ?bool $isUnclaimed;

    /**
     * @param ChatBoostSourceEnum $source
     *
     * @return void
     */
    protected function setSource(ChatBoostSourceEnum $source): void
    {
        $this->source = $source;
    }

    /**
     * @return ChatBoostSourceEnum
     */
    public function getSource(): ChatBoostSourceEnum
    {
        return $this->source;
    }

    /**
     * @param User $user
     *
     * @return void
     */
    protected function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param int|null $giveawayMessageId
     *
     * @return void
     */
    protected function setGiveawayMessageId(?int $giveawayMessageId): void
    {
        $this->giveawayMessageId = $giveawayMessageId;
    }

    /**
     * @return int|null
     */
    public function getGiveawayMessageId(): ?int
    {
        return $this->giveawayMessageId;
    }

    /**
     * @param int|null $prizeStarCount
     *
     * @return void
     */
    protected function setPrizeStarCount(?int $prizeStarCount): void
    {
        $this->prizeStarCount = $prizeStarCount;
    }

    /**
     * @return int|null
     */
    public function getPrizeStarCount(): ?int
    {
        return $this->prizeStarCount;
    }

    /**
     * @param bool|null $isUnclaimed
     *
     * @return void
     */
    protected function setIsUnclaimed(?bool $isUnclaimed): void
    {
        $this->isUnclaimed = $isUnclaimed;
    }

    /**
     * @return bool|null
     */
    public function getIsUnclaimed(): ?bool
    {
        return $this->isUnclaimed;
    }
}
