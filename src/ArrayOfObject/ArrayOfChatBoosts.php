<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\ChatBoost;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfChatBoosts extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = ChatBoost::class;

    /**
     * @param array $chatBoosts
     */
    public function __construct(array $chatBoosts = [])
    {
        foreach ($chatBoosts as $chatBoost) {
            $this->addChatBoost($chatBoost);
        }
    }

    /**
     * @return array
     */
    public function getChatBoosts(): array
    {
        return $this->items;
    }

    /**
     * @param ChatBoost $chatBoost
     *
     * @return void
     */
    public function addChatBoost(ChatBoost $chatBoost): void
    {
        $this->addItem($chatBoost);
    }
}
