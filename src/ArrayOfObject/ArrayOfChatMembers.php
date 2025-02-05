<?php

namespace Slavasamsonow\TelegramBotApi\ArrayOfObject;

use Slavasamsonow\TelegramBotApi\Objects\ChatMember;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;

class ArrayOfChatMembers extends BaseCollectionObject
{
    /**
     * @var string
     */
    protected static string $innerValuesType = ChatMember::class;

    /**
     * @param array $chatMembers
     */
    public function __construct(array $chatMembers = [])
    {
        foreach ($chatMembers as $chatMember) {
            $this->addChatMember($chatMember);
        }
    }

    /**
     * @return array
     */
    public function getChatMembers(): array
    {
        return $this->items;
    }

    /**
     * @param ChatMember $chatMember
     *
     * @return void
     */
    public function addChatMember(ChatMember $chatMember): void
    {
        $this->addItem($chatMember);
    }
}
