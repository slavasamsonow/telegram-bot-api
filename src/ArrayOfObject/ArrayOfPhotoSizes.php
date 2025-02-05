<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\PhotoSize;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfPhotoSizes extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = PhotoSize::class;

    /**
     * @param array $photoSizes
     */
    public function __construct(array $photoSizes = [])
    {
        foreach ($photoSizes as $photoSize) {
            $this->addPhotoSize($photoSize);
        }
    }

    /**
     * @return array
     */
    public function getPhotoSizes(): array
    {
        return $this->items;
    }

    /**
     * @param PhotoSize $photoSize
     *
     * @return void
     */
    public function addPhotoSize(PhotoSize $photoSize): void
    {
        $this->addItem($photoSize);
    }
}
