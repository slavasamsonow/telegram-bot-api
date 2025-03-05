<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfInputPollOptionsRequest extends BaseCollectionObject
{
    /**
     * @param array $inputPollOptions
     *
     * @throws TelegramBotApiException
     */
    public function __construct(array $inputPollOptions = [])
    {
        foreach ($inputPollOptions as $inputPollOption) {
            $this->addOption($inputPollOption);
        }
    }

    /**
     * @param InputPollOptionRequest $inputPollOption
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function addOption(InputPollOptionRequest $inputPollOption): void
    {
        if (count($this->items) > 10) {
            throw new TelegramBotApiException('Count of inputPollOptions must be less than 10');
        }
        $this->addItem($inputPollOption);
    }
}
