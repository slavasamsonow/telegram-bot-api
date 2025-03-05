<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects;

use Slavasamsonow\TelegramBotApi\Enums\ParseModeEnum;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;

class InputPollOptionRequest extends BaseRequestObject
{
    /**
     * @var string
     */
    protected string $text;

    /**
     * @var ParseModeEnum|null
     */
    protected ?ParseModeEnum $textParseMode;

    /**
     * @var ArrayOfMessageEntitiesRequest|null
     */
    protected ?ArrayOfMessageEntitiesRequest $textEntities;


    /**
     * @param string $text
     * @param ParseModeEnum|null $textParseMode
     * @param ArrayOfMessageEntitiesRequest|null $textEntities
     */
    public function __construct(
        string $text,
        ?ParseModeEnum $textParseMode = null,
        ?ArrayOfMessageEntitiesRequest $textEntities = null,
    ) {
        $this->setText($text);
        $this->setTextParseMode($textParseMode);
        $this->setTextEntities($textEntities);
    }


    /**
     * @param string $text
     *
     * @return void
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @param ArrayOfMessageEntitiesRequest|null $textEntities
     *
     * @return void
     */
    public function setTextEntities(?ArrayOfMessageEntitiesRequest $textEntities): void
    {
        $this->textEntities = $textEntities;
    }

    /**
     * @param ParseModeEnum|null $textParseMode
     *
     * @return void
     */
    public function setTextParseMode(?ParseModeEnum $textParseMode): void
    {
        $this->textParseMode = $textParseMode;
    }
}
