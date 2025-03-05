<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfMessageEntities;

class TextQuote extends BaseTelegramObject
{
    protected static array $map = [
        'text' => true,
        'entities' => ArrayOfMessageEntities::class,
        'position' => true,
        'is_manual' => true,
    ];

    /**
     * @var string
     */
    public readonly string $text;

    /**
     * @var ArrayOfMessageEntities|null
     */
    public readonly ?ArrayOfMessageEntities $entities;

    /**
     * @var int
     */
    public readonly int $position;

    /**
     * @var bool|null
     */
    public readonly ?bool $is_manual;


    /**
     * @param string $text
     *
     * @return void
     */
    protected function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param ArrayOfMessageEntities|null $entities
     *
     * @return void
     */
    protected function setEntities(?ArrayOfMessageEntities $entities): void
    {
        $this->entities = $entities;
    }

    /**
     * @return ArrayOfMessageEntities|null
     */
    public function getEntities(): ?ArrayOfMessageEntities
    {
        return $this->entities;
    }

    /**
     * @param int $position
     *
     * @return void
     */
    protected function setPosition(int $position): void
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param bool|null $is_manual
     *
     * @return void
     */
    protected function setIsManual(?bool $is_manual): void
    {
        $this->is_manual = $is_manual;
    }

    /**
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->is_manual;
    }
}
