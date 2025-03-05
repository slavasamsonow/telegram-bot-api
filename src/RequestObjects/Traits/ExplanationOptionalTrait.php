<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects\ArrayOfMessageEntitiesRequest;

trait ExplanationOptionalTrait
{
    /**
     * @var string
     */
    protected string $explanation;

    /**
     * @var ParseModeEnum|null
     */
    protected ?ParseModeEnum $explanationParseMode;

    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $explanationEntities;

    /**
     * @param string|null $explanation
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setExplanation(?string $explanation): void
    {
        if ($explanation !== null && mb_strlen($explanation) > 200) {
            throw new TelegramBotApiException('Explanation is less than 200 characters');
        }
        $this->explanation = $explanation;
    }

    /**
     * @param ParseModeEnum|null $explanationParseMode
     *
     * @return void
     */
    public function setExplanationParseMode(?ParseModeEnum $explanationParseMode): void
    {
        $this->explanationParseMode = $explanationParseMode;
    }

    /**
     * @param ArrayOfMessageEntitiesRequest|null $explanationEntities
     *
     * @return void
     */
    public function setExplanationEntities(?ArrayOfMessageEntitiesRequest $explanationEntities): void
    {
        $this->explanationEntities = $explanationEntities;
    }
}