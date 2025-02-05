<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatBoost extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'boost_id' => true,
        'add_date' => true,
        'expiration_date' => true,
        'source' => ChatBoostSource::class,
    ];

    /**
     * @var string
     */
    protected string $boostId;

    /**
     * @var int
     */
    protected int $addDate;

    /**
     * @var int
     */
    protected int $expirationDate;

    /**
     * @var ChatBoostSource
     */
    protected ChatBoostSource $source;

    /**
     * @param string $boostId
     *
     * @return void
     */
    protected function setBoostId(string $boostId): void
    {
        $this->boostId = $boostId;
    }

    /**
     * @return string
     */
    public function getBoostId(): string
    {
        return $this->boostId;
    }

    /**
     * @param int $addDate
     *
     * @return void
     */
    protected function setAddDate(int $addDate): void
    {
        $this->addDate = $addDate;
    }

    /**
     * @return int
     */
    public function getAddDate(): int
    {
        return $this->addDate;
    }

    /**
     * @param int $expirationDate
     *
     * @return void
     */
    protected function setExpirationDate(int $expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return int
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * @param ChatBoostSource $source
     *
     * @return void
     */
    protected function setSource(ChatBoostSource $source): void
    {
        $this->source = $source;
    }

    /**
     * @return ChatBoostSource
     */
    public function getSource(): ChatBoostSource
    {
        return $this->source;
    }
}
