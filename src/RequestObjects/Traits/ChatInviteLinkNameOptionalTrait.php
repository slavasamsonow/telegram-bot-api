<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait ChatInviteLinkNameOptionalTrait
{
    /**
     * @var string|null
     */
    protected ?string $name;

    /**
     * @param string|null $name
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setName(?string $name): void
    {
        if ($name != null) {
            if (mb_strlen($name) > 32) {
                throw new TelegramBotApiException('Max name of link 32 characters');
            }
        }

        $this->name = $name;
    }
}
