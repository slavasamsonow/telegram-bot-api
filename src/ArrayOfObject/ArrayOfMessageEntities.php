<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\MessageEntity;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfMessageEntities extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = MessageEntity::class;

    /**
     * @param array $entities
     */
    public function __construct(array $entities = [])
    {
        foreach ($entities as $entity) {
            $this->addEntity($entity);
        }
    }

    /**
     * @return array
     */
    public function getEntities(): array
    {
        return $this->items;
    }

    /**
     * @param MessageEntity $messageEntity
     *
     * @return void
     */
    public function addEntity(MessageEntity $messageEntity): void
    {
        $this->addItem($messageEntity);
    }
}
