<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class Location extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'latitude' => true,
        'longitude' => true,
        'horizontal_accuracy' => true,
        'live_period' => true,
        'heading' => true,
        'proximity_alert_radius' => true,
    ];

    /**
     * @var float
     */
    protected float $latitude;

    /**
     * @var float
     */
    protected float $longitude;

    /**
     * @var float|null
     */
    protected ?float $horizontalAccuracy;

    /**
     * @var int|null
     */
    protected ?int $livePeriod;

    /**
     * @var int|null
     */
    protected ?int $heading;

    /**
     * @var int|null
     */
    protected ?int $proximityAlertRadius;

    /**
     * @param float $latitude
     *
     * @return void
     */
    protected function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     *
     * @return void
     */
    protected function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $horizontalAccuracy
     *
     * @return void
     */
    protected function setHorizontalAccuracy(?float $horizontalAccuracy): void
    {
        $this->horizontalAccuracy = $horizontalAccuracy;
    }

    /**
     * @return float|null
     */
    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontalAccuracy;
    }

    /**
     * @param int|null $livePeriod
     *
     * @return void
     */
    protected function setLivePeriod(?int $livePeriod): void
    {
        $this->livePeriod = $livePeriod;
    }

    /**
     * @return int|null
     */
    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    /**
     * @param int|null $heading
     *
     * @return void
     */
    protected function setHeading(?int $heading): void
    {
        $this->heading = $heading;
    }

    /**
     * @return int|null
     */
    public function getHeading(): ?int
    {
        return $this->heading;
    }

    /**
     * @param int|null $proximityAlertRadius
     *
     * @return void
     */
    protected function setProximityAlertRadius(?int $proximityAlertRadius): void
    {
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    /**
     * @return int|null
     */
    public function getProximityAlertRadius(): ?int
    {
        return $this->proximityAlertRadius;
    }
}
