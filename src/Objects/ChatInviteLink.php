<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatInviteLink extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'invite_link' => true,
        'creator' => User::class,
        'creates_join_request' => true,
        'is_primary' => true,
        'is_revoked' => true,
        'name' => true,
        'expire_date' => true,
        'member_limit' => true,
        'pending_join_request_count' => true,
        'subscription_period' => true,
        'subscription_price' => true,
    ];

    /**
     * @var string
     */
    public readonly string $inviteLink;

    /**
     * @var User
     */
    public readonly User $creator;

    /**
     * @var bool
     */
    public readonly bool $createsJoinRequest;

    /**
     * @var bool
     */
    public readonly bool $isPrimary;

    /**
     * @var bool
     */
    public readonly bool $isRevoked;

    /**
     * @var string|null
     */
    public readonly ?string $name;

    /**
     * @var int|null
     */
    public readonly ?int $expireDate;

    /**
     * @var int|null
     */
    public readonly ?int $memberLimit;

    /**
     * @var int|null
     */
    public readonly ?int $pendingJoinRequestCount;

    /**
     * @var int|null
     */
    public readonly ?int $subscriptionPeriod;

    /**
     * @var int|null
     */
    public readonly ?int $subscriptionPrice;


    /**
     * @param string $inviteLink
     *
     * @return void
     */
    protected function setInviteLink(string $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }

    /**
     * @return string
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * @param User $creator
     *
     * @return void
     */
    protected function setCreator(User $creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return User
     */
    public function getCreator(): User
    {
        return $this->creator;
    }

    /**
     * @param bool $createsJoinRequest
     *
     * @return void
     */
    protected function setCreatesJoinRequest(bool $createsJoinRequest): void
    {
        $this->createsJoinRequest = $createsJoinRequest;
    }

    /**
     * @return bool
     */
    public function isCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * @param bool $isPrimary
     *
     * @return void
     */
    protected function setIsPrimary(bool $isPrimary): void
    {
        $this->isPrimary = $isPrimary;
    }

    /**
     * @return bool
     */
    public function isPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * @param bool $isRevoked
     *
     * @return void
     */
    protected function setIsRevoked(bool $isRevoked): void
    {
        $this->isRevoked = $isRevoked;
    }

    /**
     * @return bool
     */
    public function isRevoked(): bool
    {
        return $this->isRevoked;
    }

    /**
     * @param string|null $name
     *
     * @return void
     */
    protected function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param int|null $expireDate
     *
     * @return void
     */
    protected function setExpireDate(?int $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return int|null
     */
    public function getExpireDate(): ?int
    {
        return $this->expireDate;
    }

    /**
     * @param int|null $memberLimit
     *
     * @return void
     */
    protected function setMemberLimit(?int $memberLimit): void
    {
        $this->memberLimit = $memberLimit;
    }

    /**
     * @return int|null
     */
    public function getMemberLimit(): ?int
    {
        return $this->memberLimit;
    }

    /**
     * @param int|null $pendingJoinRequestCount
     *
     * @return void
     */
    protected function setPendingJoinRequestCount(?int $pendingJoinRequestCount): void
    {
        $this->pendingJoinRequestCount = $pendingJoinRequestCount;
    }

    /**
     * @return int|null
     */
    public function getPendingJoinRequestCount(): ?int
    {
        return $this->pendingJoinRequestCount;
    }

    /**
     * @param int|null $subscriptionPeriod
     *
     * @return void
     */
    protected function setSubscriptionPeriod(?int $subscriptionPeriod): void
    {
        $this->subscriptionPeriod = $subscriptionPeriod;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionPeriod(): ?int
    {
        return $this->subscriptionPeriod;
    }

    /**
     * @param int|null $subscriptionPrice
     *
     * @return void
     */
    protected function setSubscriptionPrice(?int $subscriptionPrice): void
    {
        $this->subscriptionPrice = $subscriptionPrice;
    }

    /**
     * @return int|null
     */
    public function getSubscriptionPrice(): ?int
    {
        return $this->subscriptionPrice;
    }
}
