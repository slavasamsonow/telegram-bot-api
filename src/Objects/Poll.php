<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfMessageEntities;
use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfPollOptions;
use Slavasamsonow\TelegramBotApi\Enums\PollTypeEnum;

class Poll extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'question' => true,
        'question_entities' => ArrayOfMessageEntities::class,
        'options' => ArrayOfPollOptions::class,
        'total_voter_count' => true,
        'is_closed' => true,
        'is_anonymous' => true,
        'type' => PollTypeEnum::class,
        'allows_multiple_answers' => true,
        'correct_option_id' => true,
        'explanation' => true,
        'explanation_entities' => ArrayOfMessageEntities::class,
        'open_period' => true,
        'close_date' => true,
    ];

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $question;

    /**
     * @var ArrayOfMessageEntities|null
     */
    protected ?ArrayOfMessageEntities $questionEntities;

    /**
     * @var ArrayOfPollOptions
     */
    protected ArrayOfPollOptions $options;

    /**
     * @var int
     */
    protected int $totalVoterCount;

    /**
     * @var bool
     */
    protected bool $isClosed;

    /**
     * @var bool
     */
    protected bool $isAnonymous;


    /**
     * @var PollTypeEnum
     */
    protected PollTypeEnum $type;

    /**
     * @var bool
     */
    protected bool $allowsMultipleAnswers;

    /**
     * @var int|null
     */
    protected ?int $correctOptionId;

    /**
     * @var string|null
     */
    protected ?string $explanation;

    /**
     * @var ArrayOfMessageEntities|null
     */
    protected ?ArrayOfMessageEntities $explanationEntities;

    /**
     * @var int|null
     */
    protected ?int $openPeriod;

    /**
     * @var int|null
     */
    protected ?int $closeDate;

    /**
     * @param string $id
     *
     * @return void
     */
    protected function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $question
     *
     * @return void
     */
    protected function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param ArrayOfMessageEntities|null $questionEntities
     *
     * @return void
     */
    protected function setQuestionEntities(?ArrayOfMessageEntities $questionEntities): void
    {
        $this->questionEntities = $questionEntities;
    }

    /**
     * @return ArrayOfMessageEntities|null
     */
    public function getQuestionEntities(): ?ArrayOfMessageEntities
    {
        return $this->questionEntities;
    }

    /**
     * @param ArrayOfPollOptions $options
     *
     * @return void
     */
    protected function setOptions(ArrayOfPollOptions $options): void
    {
        $this->options = $options;
    }

    /**
     * @return ArrayOfPollOptions
     */
    public function getOptions(): ArrayOfPollOptions
    {
        return $this->options;
    }

    /**
     * @param int $totalVoterCount
     *
     * @return void
     */
    protected function setTotalVoterCount(int $totalVoterCount): void
    {
        $this->totalVoterCount = $totalVoterCount;
    }

    /**
     * @return int
     */
    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    /**
     * @param bool $isClosed
     *
     * @return void
     */
    protected function setIsClosed(bool $isClosed): void
    {
        $this->isClosed = $isClosed;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param bool $isAnonymous
     *
     * @return void
     */
    protected function setIsAnonymous(bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @param PollTypeEnum $type
     *
     * @return void
     */
    protected function setType(PollTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return PollTypeEnum
     */
    public function getType(): PollTypeEnum
    {
        return $this->type;
    }

    /**
     * @param bool $allowsMultipleAnswers
     *
     * @return void
     */
    protected function setAllowsMultipleAnswers(bool $allowsMultipleAnswers): void
    {
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;
    }

    /**
     * @return bool
     */
    public function isAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    /**
     * @param int|null $correctOptionId
     *
     * @return void
     */
    protected function setCorrectOptionId(?int $correctOptionId): void
    {
        $this->correctOptionId = $correctOptionId;
    }

    /**
     * @return int|null
     */
    public function getCorrectOptionId(): ?int
    {
        return $this->correctOptionId;
    }

    /**
     * @param string|null $explanation
     *
     * @return void
     */
    protected function setExplanation(?string $explanation): void
    {
        $this->explanation = $explanation;
    }

    /**
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @param ArrayOfMessageEntities|null $explanationEntities
     *
     * @return void
     */
    protected function setExplanationEntities(?ArrayOfMessageEntities $explanationEntities): void
    {
        $this->explanationEntities = $explanationEntities;
    }

    /**
     * @return ArrayOfMessageEntities|null
     */
    public function getExplanationEntities(): ?ArrayOfMessageEntities
    {
        return $this->explanationEntities;
    }

    /**
     * @param int|null $openPeriod
     *
     * @return void
     */
    protected function setOpenPeriod(?int $openPeriod): void
    {
        $this->openPeriod = $openPeriod;
    }

    /**
     * @return int|null
     */
    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    /**
     * @param int|null $closeDate
     *
     * @return void
     */
    protected function setCloseDate(?int $closeDate): void
    {
        $this->closeDate = $closeDate;
    }

    /**
     * @return int|null
     */
    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }
}
