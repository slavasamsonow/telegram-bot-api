<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;

trait QuestionRequiredTrait
{
    /**
     * @var string
     */
    protected string $question;

    /**
     * @var ParseModeEnum|null
     */
    protected ?ParseModeEnum $questionParseMode;

    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $questionEntities;

    /**
     * @param string $question
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setQuestion(string $question): void
    {
        if (mb_strlen($question) > 300) {
            throw new TelegramBotApiException('Question is less than 300 characters');
        } elseif (mb_strlen($question) < 1) {
            throw new TelegramBotApiException('Question is more than 1 characters');
        }
        $this->question = $question;
    }

    /**
     * @param ParseModeEnum|null $questionParseMode
     *
     * @return void
     */
    public function setQuestionParseMode(?ParseModeEnum $questionParseMode): void
    {
        $this->questionParseMode = $questionParseMode;
    }

    /**
     * @param ArrayOfMessageEntitiesRequest|null $questionEntities
     *
     * @return void
     */
    public function setQuestionEntities(?ArrayOfMessageEntitiesRequest $questionEntities): void
    {
        $this->questionEntities = $questionEntities;
    }
}
