<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;

trait EntitiesOptionalTrait
{
    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $entities;

    /**
     * @param ArrayOfMessageEntitiesRequest|null $entities
     *
     * @return void
     */
    public function setEntities(?ArrayOfMessageEntitiesRequest $entities): void
    {
        $this->entities = $entities;
    }
}
