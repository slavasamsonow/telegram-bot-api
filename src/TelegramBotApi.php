<?php

namespace Slavasamsonow\TelegramBotApi;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Methods\BotMethods;
use Slavasamsonow\TelegramBotApi\Methods\ChatInviteMethods;
use Slavasamsonow\TelegramBotApi\Methods\ChatMemberMethods;
use Slavasamsonow\TelegramBotApi\Methods\ChatMethods;
use Slavasamsonow\TelegramBotApi\Methods\ForumTopicMethods;
use Slavasamsonow\TelegramBotApi\Methods\MessagesMethodsTrait;

class TelegramBotApi
{
    use BotMethods;
    use MessagesMethodsTrait;
    use ChatMemberMethods;
    use ChatMethods;
    use ChatInviteMethods;
    use ForumTopicMethods;
    // TODO: StickerMethods
    use Http;

    /** @var string version of app */
    public const VERSION = '1.0.0';

    /** @var string telegram bot api url without token */
    protected const URL_PREFIX = 'https://api.telegram.org/bot';

    /** @var string  telegram bot api url with token */
    private string $endpoint;

    /**
     * @var string token
     */
    protected string $token;


    /**
     * @param string $token
     * @param string|null $endpoint
     *
     * @throws TelegramBotApiException
     */
    public function __construct(string $token, string $endpoint = null)
    {
        $this->setToken($token);
        $this->endpoint = ($endpoint ?: self::URL_PREFIX) . $token . '/';
    }


    /**
     * @param string $token
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function setToken(string $token): void
    {
        $this->validateToken($token);
        $this->token = $token;
    }


    /**
     * @param $token
     *
     * @return void
     * @throws TelegramBotApiException
     */
    protected function validateToken($token): void
    {
        if (!preg_match('/[0-9]+:[a-zA-Z0-9]+/', $token)) {
            throw new TelegramBotApiException('Invalid Telegram bot token');
        }
    }
}
