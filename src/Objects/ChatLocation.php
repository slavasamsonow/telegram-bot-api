<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class ChatLocation extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'location' => Location::class,
        'address' => true,
    ];

    /**
     * @var Location
     */
    public readonly Location $location;

    /**
     * @var string
     */
    public readonly string $address;


    /**
     * @param Location $location
     *
     * @return void
     */
    protected function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

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
}
