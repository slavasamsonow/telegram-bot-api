<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfMessageEntitiesRequest extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = MessageEntityRequest::class;

    /**
     * @param array $messageEntities
     */
    public function __construct(array $messageEntities = [])
    {
        foreach ($messageEntities as $messageEntity) {
            $this->addMessageEntity($messageEntity);
        }
    }

    /**
     * @return array
     */
    public function getMessageEntities(): array
    {
        return $this->items;
    }

    /**
     * @param MessageEntityRequest $messageEntity
     *
     * @return void
     */
    public function addMessageEntity(MessageEntityRequest $messageEntity): void
    {
        $this->addItem($messageEntity);
    }
}
