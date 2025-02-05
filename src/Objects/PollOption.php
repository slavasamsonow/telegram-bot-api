<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfMessageEntities;

class PollOption extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'text' => true,
        'text_entities' => ArrayOfMessageEntities::class,
        'voter_count' => true,
    ];

    /**
     * @var string
     */
    protected string $text;

    /**
     * @var ArrayOfMessageEntities
     */
    protected ArrayOfMessageEntities $textEntities;

    /**
     * @var int
     */
    protected int $voterCount;

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
     * @param ArrayOfMessageEntities $textEntities
     *
     * @return void
     */
    protected function setTextEntities(ArrayOfMessageEntities $textEntities): void
    {
        $this->textEntities = $textEntities;
    }

    /**
     * @return ArrayOfMessageEntities
     */
    public function getTextEntities(): ArrayOfMessageEntities
    {
        return $this->textEntities;
    }

    /**
     * @param int $voterCount
     *
     * @return void
     */
    protected function setVoterCount(int $voterCount): void
    {
        $this->voterCount = $voterCount;
    }

    /**
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }
}
