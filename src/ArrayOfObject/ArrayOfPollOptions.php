<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\PollOption;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfPollOptions extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = PollOption::class;

    /**
     * @param array $pollOptions
     */
    public function __construct(array $pollOptions = [])
    {
        foreach ($pollOptions as $pollOption) {
            $this->addPollOption($pollOption);
        }
    }

    /**
     * @return array
     */
    public function getPollOptions(): array
    {
        return $this->items;
    }

    /**
     * @param PollOption $pollOption
     *
     * @return void
     */
    public function addPollOption(PollOption $pollOption): void
    {
        $this->addItem($pollOption);
    }
}
