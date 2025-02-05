<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\IncludeObjects;

use Slavasamsonow\TelegramBotApi\Enums\MessageEntityTypeEnum;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\Objects\User;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\MessageEntityRequiredTrait;

class MessageEntityRequest extends BaseRequestObject
{
    use MessageEntityRequiredTrait;

    private function __construct()
    {
    }

    /**
     * @param int $offset
     * @param int $length
     * @param string $url
     *
     * @return MessageEntityRequest
     * @throws TelegramBotApiException
     */
    public static function createTextLink(
        int $offset,
        int $length,
        string $url
    ): MessageEntityRequest {
        try {
            $entity = new self();
            $entity->setType(MessageEntityTypeEnum::TextLink);
            $entity->setOffset($offset);
            $entity->setLength($length);
            $entity->setUrl($url);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException('Error create message entity text link', $e->getCode(), $e);
        }
        return $entity;
    }

    /**
     * @param int $offset
     * @param int $length
     * @param User $user
     *
     * @return MessageEntityRequest
     */
    public static function createTextMention(
        int $offset,
        int $length,
        // TODO: change to request object
        User $user
    ): MessageEntityRequest {
        $entity = new self();
        $entity->setType(MessageEntityTypeEnum::TextMention);
        $entity->setOffset($offset);
        $entity->setLength($length);
        $entity->setUser($user);
        return $entity;
    }

    /**
     * @param int $offset
     * @param int $length
     * @param string $language
     *
     * @return MessageEntityRequest
     */
    public static function createPre(
        int $offset,
        int $length,
        string $language
    ): MessageEntityRequest {
        $entity = new self();
        $entity->setType(MessageEntityTypeEnum::Pre);
        $entity->setOffset($offset);
        $entity->setLength($length);
        $entity->setLanguage($language);
        return $entity;
    }

    /**
     * @param int $offset
     * @param int $length
     * @param string $customEmoji
     *
     * @return MessageEntityRequest
     */
    public static function createCustomEmoji(
        int $offset,
        int $length,
        string $customEmoji
    ): MessageEntityRequest {
        $entity = new self();
        $entity->setType(MessageEntityTypeEnum::CustomEmoji);
        $entity->setOffset($offset);
        $entity->setLength($length);
        $entity->setCustomEmojiId($customEmoji);
        return $entity;
    }

    /**
     * @param MessageEntityTypeEnum $type
     * @param int $offset
     * @param int $length
     *
     * @return MessageEntityRequest
     * @throws TelegramBotApiException
     */
    public static function create(
        MessageEntityTypeEnum $type,
        int $offset,
        int $length
    ): MessageEntityRequest {
        if ($type == MessageEntityTypeEnum::TextLink) {
            throw new TelegramBotApiException('Create text link from createTextLink method');
        } elseif ($type == MessageEntityTypeEnum::TextMention) {
            throw new TelegramBotApiException('Create text mention from createTextMention method');
        } elseif ($type == MessageEntityTypeEnum::Pre) {
            throw new TelegramBotApiException('Create text pre from createPre method');
        } elseif ($type == MessageEntityTypeEnum::CustomEmoji) {
            throw new TelegramBotApiException('Create custom emoji from createCustomEmoji method');
        }

        $entity = new self();
        $entity->setType($type);
        $entity->setOffset($offset);
        $entity->setLength($length);
        return $entity;
    }
}
