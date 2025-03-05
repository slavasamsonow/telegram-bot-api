<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\PollTypeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfInputPollOptionsRequest;

trait PollRequiredTrait
{
    use QuestionRequiredTrait;
    use ExplanationOptionalTrait;

    /**
     * @var ArrayOfInputPollOptionsRequest
     */
    protected ArrayOfInputPollOptionsRequest $options;

    /**
     * @var bool|null
     */
    protected ?bool $isAnonymous;

    /**
     * @var PollTypeEnum|null
     */
    protected ?PollTypeEnum $type;

    /**
     * @var bool|null
     */
    protected ?bool $allowsMultipleAnswers;

    /**
     * @var int|null
     */
    protected ?int $correctOptionId;

    /**
     * @var int|null
     */
    protected ?int $openPeriod;

    /**
     * @var int|null
     */
    protected ?int $closeDate;

    /**
     * @var bool|null
     */
    protected ?bool $isClosed;


    /**
     * @param ArrayOfInputPollOptionsRequest $options
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setOptions(ArrayOfInputPollOptionsRequest $options): void
    {
        if (count($options->getItems()) < 2) {
            throw new TelegramBotApiException('Options must be at least 2 items');
        }
        $this->options = $options;
    }

    public function setIsAnonymous(?bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * @param PollTypeEnum|null $type
     *
     * @return void
     */
    public function setType(?PollTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @param bool|null $allowsMultipleAnswers
     *
     * @return void
     */
    public function setAllowsMultipleAnswers(?bool $allowsMultipleAnswers): void
    {
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;
    }

    /**
     * @param int|null $correctOptionId
     *
     * @return void
     */
    public function setCorrectOptionId(?int $correctOptionId): void
    {
        $this->correctOptionId = $correctOptionId;
    }

    /**
     * @param int|null $openPeriod
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setOpenPeriod(?int $openPeriod): void
    {
        if ($this->closeDate !== null) {
            throw new TelegramBotApiException('Open period can\'t be used together with close date');
        }
        if ($openPeriod < 5) {
            throw new TelegramBotApiException('Open period must be at least 5');
        } elseif ($openPeriod > 600) {
            throw new TelegramBotApiException('Open period must be less than 600');
        }
        $this->openPeriod = $openPeriod;
    }

    /**
     * @param int|null $closeDate
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setCloseDate(?int $closeDate): void
    {
        if ($this->closeDate !== null) {
            throw new TelegramBotApiException('Close date can\'t be used together with open period');
        }
        $this->closeDate = $closeDate;
    }

    /**
     * @param bool|null $isClosed
     *
     * @return void
     */
    public function setIsClosed(?bool $isClosed): void
    {
        $this->isClosed = $isClosed;
    }
}
