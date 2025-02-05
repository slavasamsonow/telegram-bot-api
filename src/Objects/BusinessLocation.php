<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class BusinessLocation extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'address' => true,
        'location' => Location::class,
    ];

    /**
     * @var string
     */
    protected string $address;

    /**
     * @var Location|null
     */
    protected ?Location $location;

    /**
     * @param string $address
     *
     * @return void
     */
    protected function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param Location|null $location
     *
     * @return void
     */
    protected function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
