<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects;

use Slavasamsonow\TelegramBotApi\BaseObject;

class BaseCollectionObject extends BaseObject
{
    /**
     * @var array
     */
    protected array $items = [];
    /**
     * @var string
     */
    protected static string $innerValuesType = BaseObject::class;

    /**
     * @param BaseObject $item
     *
     * @return void
     */
    protected function addItem(BaseObject $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function fromResponse($data): static
    {
        $inst = new static();
        foreach ($data as $item) {
            /**
             * @var BaseObject $newItem
             */
            $newItem = static::$innerValuesType;
            $newItem = $newItem::fromResponse($item);
            $inst->addItem($newItem);
        }
        return $inst;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $output = [];
        foreach ($this->items as $item) {
            $object = $this->parseObject($item);
            $output[] = $object;
        }
        return $output;
    }
}
