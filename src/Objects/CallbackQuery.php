<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Symfony\Component\VarDumper\Cloner\Data;

class CallbackQuery extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'from' => User::class,
        'message' => Message::class,
        'inline_message_id' => true,
        'chat_instance' => true,
        'data' => true,
        'game_short_name' => true,
    ];

    /**
     * @var string
     */
    public readonly string $id;

    /**
     * @var User
     */
    public readonly User $from;

    /**
     * @var Message|null
     */
    public readonly ?Message $message;

    /**
     * @var string|null
     */
    public readonly ?string $inline_message_id;

    /**
     * @var string|null
     */
    public readonly ?string $chat_instance;

    /**
     * @var string|null
     */
    public readonly ?string $data;

    /**
     * @var string|null
     */
    public readonly ?string $game_short_name;


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
     * @param User $from
     *
     * @return void
     */
    protected function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param Message|null $message
     *
     * @return void
     */
    protected function setMessage(?Message $message): void
    {
        $this->message = $message;
    }

    /**
     * @return Message|null
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * @param string|null $inline_message_id
     *
     * @return void
     */
    protected function setInlineMessageId(?string $inline_message_id): void
    {
        $this->inline_message_id = $inline_message_id;
    }

    /**
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inline_message_id;
    }

    /**
     * @param string|null $chat_instance
     *
     * @return void
     */
    protected function setChatInstance(?string $chat_instance): void
    {
        $this->chat_instance = $chat_instance;
    }

    /**
     * @return string|null
     */
    public function getChatInstance(): ?string
    {
        return $this->chat_instance;
    }

    /**
     * @param string|null $data
     *
     * @return void
     */
    protected function setData(?string $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $game_short_name
     *
     * @return void
     */
    protected function setGameShortName(?string $game_short_name): void
    {
        $this->game_short_name = $game_short_name;
    }

    /**
     * @return string|null
     */
    public function getGameShortName(): ?string
    {
        return $this->game_short_name;
    }
}
