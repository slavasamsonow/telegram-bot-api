<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfMessageEntities;
use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfPhotoSizes;
use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfUsers;

class Message extends BaseTelegramObject
{
    protected static array $map = [
        'message_id' => true,
        'message_thread_id' => true,
        'from' => User::class,
        'sender_chat' => Chat::class,
        'sender_boost_count' => true,
        'sender_business_bot' => User::class,
        'date' => true,
        'business_connection_id' => true,
        'chat' => Chat::class,
        // TODO: forward_origin
        'is_topic_message' => true,
        'is_automatic_forward' => true,
        'reply_to_message' => Message::class,
        // TODO: external_reply
        // TODO: quote
        // TODO: reply_to_story
        'via_bot' => User::class,
        'edit_date' => true,
        'has_protected_content' => true,
        'is_from_offline' => true,
        'media_group_id' => true,
        'author_signature' => true,
        'text' => true,
        'entities' => ArrayOfMessageEntities::class,
        // TODO: link_preview_options
        'effect_id' => true,
        // TODO: animation
        'audio' => Audio::class,
        'document' => Document::class,
        // TODO: paid_media
        'photo' => ArrayOfPhotoSizes::class,
        'sticker' => Sticker::class,
        // TODO: story
        'video' => Video::class,
        'video_note' => VideoNote::class,
        'voice' => Voice::class,
        'caption' => true,
        'caption_entities' => ArrayOfMessageEntities::class,
        'show_caption_above_media' => true,
        'has_media_spoiler' => true,
        // TODO: contact
        // TODO: dice
        // TODO: game
        // TODO: poll
        // TODO: venue
        'location' => Location::class,
        'new_chat_members' => ArrayOfUsers::class,
        'left_chat_member' => User::class,
        'new_chat_title' => true,
        'new_chat_photo' => ArrayOfPhotoSizes::class,
        'delete_chat_photo' => true,
        'group_chat_created' => true,
        'supergroup_chat_created' => true,
        'channel_chat_created' => true,
        // TODO: message_auto_delete_timer_changed
        'migrate_to_chat_id' => true,
        'migrate_from_chat_id' => true,
        // TODO: pinned_message
        // TODO: invoice
        // TODO: successful_payment
        // TODO: refunded_payment
        // TODO: users_shared
        // TODO: chat_shared
        'connected_website' => true,
        // TODO: write_access_allowed
        // TODO: passport_data
        // TODO: proximity_alert_triggered
        // TODO: boost_added
        // TODO: chat_background_set
        // TODO: forum_topic_created
        // TODO: forum_topic_edited
        // TODO: forum_topic_closed
        // TODO: forum_topic_reopened
        // TODO: general_forum_topic_hidden
        // TODO: general_forum_topic_unhidden
        // TODO: giveaway_created
        // TODO: giveaway
        // TODO: giveaway_winners
        // TODO: giveaway_completed
        // TODO: video_chat_scheduled
        // TODO: video_chat_started
        // TODO: video_chat_ended
        // TODO: video_chat_participants_invited
        // TODO: web_app_data
        // TODO: reply_markup
    ];

    /**
     * @var int
     */
    public readonly int $messageId;

    /**
     * @var int|null
     */
    public readonly ?int $messageThreadId;

    /**
     * @var User|null
     */
    public readonly ?User $from;

    /**
     * @var Chat|null
     */
    public readonly ?Chat $senderChat;

    /**
     * @var int|null
     */
    public readonly ?int $senderBoostCount;

    /**
     * @var User|null
     */
    public readonly ?User $senderBusinessBot;

    /**
     * @var int
     */
    public readonly int $date;

    /**
     * @var string|null
     */
    public readonly ?string $businessConnectionId;

    /**
     * @var Chat
     */
    public readonly Chat $chat;

    // TODO: add forward_origin

    /**
     * @var bool|null
     */
    public readonly ?bool $isTopicMessage;

    /**
     * @var bool|null
     */
    public readonly ?bool $isAutomaticForward;

    /**
     * @var Message|null
     */
    public readonly ?Message $replyToMessage;

    // TODO: add external_reply

    // TODO: add quote

    // TODO: reply_to_story

    /**
     * @var User|null
     */
    public readonly ?User $viaBot;

    /**
     * @var int|null
     */
    public readonly ?int $editDate;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasProtectedContent;

    /**
     * @var bool|null
     */
    public readonly ?bool $isFromOffline;

    /**
     * @var string|null
     */
    public readonly ?string $mediaGroupId;

    /**
     * @var string|null
     */
    public readonly ?string $authorSignature;

    /**
     * @var string|null
     */
    public readonly ?string $text;

    /**
     * @var ArrayOfMessageEntities|null
     */
    public readonly ?ArrayOfMessageEntities $entities;

    // TODO: link_preview_options

    /**
     * @var string|null
     */
    public readonly ?string $effectId;

    // TODO: animation

    /**
     * @var Audio|null
     */
    public readonly ?Audio $audio;

    /**
     * @var Document|null
     */
    public readonly ?Document $document;

    // TODO: paid_media

    /**
     * @var ArrayOfPhotoSizes|null
     */
    public readonly ?ArrayOfPhotoSizes $photo;

    /**
     * @var Sticker|null
     */
    public readonly ?Sticker $sticker;

    // TODO: story

    /**
     * @var Video|null
     */
    public readonly ?Video $video;

    /**
     * @var VideoNote|null
     */
    public readonly ?VideoNote $videoNote;

    /**
     * @var Voice|null
     */
    public readonly ?Voice $voice;

    /**
     * @var string|null
     */
    public readonly ?string $caption;

    /**
     * @var ArrayOfMessageEntities|null
     */
    public readonly ?ArrayOfMessageEntities $captionEntities;

    /**
     * @var bool|null
     */
    public readonly ?bool $showCaptionAboveMedia;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasMediaSpoiler;

    // TODO: contact

    // TODO: dice

    // TODO: game

    // TODO: poll

    // TODO: venue

    /**
     * @var Location|null
     */
    public readonly ?Location $location;

    /**
     * @var ArrayOfUsers|null
     */
    public readonly ?ArrayOfUsers $newChatMembers;

    /**
     * @var User|null
     */
    public readonly ?User $leftChatMember;

    /**
     * @var string|null
     */
    public readonly ?string $newChatTitle;

    /**
     * @var ArrayOfPhotoSizes|null
     */
    public readonly ?ArrayOfPhotoSizes $newChatPhoto;

    /**
     * @var bool|null
     */
    public readonly ?bool $deleteChatPhoto;

    /**
     * @var bool|null
     */
    public readonly ?bool $groupChatCreated;

    /**
     * @var bool|null
     */
    public readonly ?bool $supergroupChatCreated;

    /**
     * @var bool|null
     */
    public readonly ?bool $channelChatCreated;

    // TODO: message_auto_delete_timer_changed

    /**
     * @var int|null
     */
    public readonly ?int $migrateToChatId;

    /**
     * @var int|null
     */
    public readonly ?int $migrateFromChatId;

    // TODO: pinned_message

    // TODO: invoice

    // TODO: successful_payment

    // TODO: refunded_payment

    // TODO: users_shared

    // TODO: chat_shared

    /**
     * @var string|null
     */
    public readonly ?string $connectedWebsite;

    // TODO: write_access_allowed

    // TODO: passport_data

    // TODO: proximity_alert_triggered

    // TODO: boost_added

    // TODO: chat_background_set

    // TODO: forum_topic_created

    // TODO: forum_topic_edited

    // TODO: forum_topic_closed

    // TODO: forum_topic_reopened

    // TODO: general_forum_topic_hidden

    // TODO: general_forum_topic_unhidden

    // TODO: giveaway_created

    // TODO: giveaway

    // TODO: giveaway_winners

    // TODO: giveaway_completed

    // TODO: video_chat_scheduled

    // TODO: video_chat_started

    // TODO: video_chat_ended

    // TODO: video_chat_participants_invited

    // TODO: web_app_data

    // TODO: reply_markup


    /**
     * @param int $messageId
     *
     * @return void
     */
    protected function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }

    /**
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * @param int|null $messageThreadId
     *
     * @return void
     */
    protected function setMessageThreadId(?int $messageThreadId): void
    {
        $this->messageThreadId = $messageThreadId;
    }

    /**
     * @return int|null
     */
    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
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
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * @param Chat|null $senderChat
     *
     * @return void
     */
    protected function setSenderChat(?Chat $senderChat): void
    {
        $this->senderChat = $senderChat;
    }

    /**
     * @return Chat|null
     */
    public function getSenderChat(): ?Chat
    {
        return $this->senderChat;
    }

    /**
     * @param int|null $senderBoostCount
     *
     * @return void
     */
    protected function setSenderBoostCount(?int $senderBoostCount): void
    {
        $this->senderBoostCount = $senderBoostCount;
    }

    /**
     * @return int|null
     */
    public function getSenderBoostCount(): ?int
    {
        return $this->senderBoostCount;
    }

    /**
     * @param User|null $senderBusinessBot
     *
     * @return void
     */
    protected function setSenderBusinessBot(?User $senderBusinessBot): void
    {
        $this->senderBusinessBot = $senderBusinessBot;
    }

    /**
     * @return User|null
     */
    public function getSenderBusinessBot(): ?User
    {
        return $this->senderBusinessBot;
    }

    /**
     * @param int $date
     *
     * @return void
     */
    protected function setDate(int $date): void
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param string|null $businessConnectionId
     *
     * @return void
     */
    protected function setBusinessConnectionId(?string $businessConnectionId): void
    {
        $this->businessConnectionId = $businessConnectionId;
    }

    /**
     * @return string|null
     */
    public function getBusinessConnectionId(): ?string
    {
        return $this->businessConnectionId;
    }

    /**
     * @param Chat $chat
     *
     * @return void
     */
    protected function setChat(Chat $chat): void
    {
        $this->chat = $chat;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * @param bool|null $isTopicMessage
     *
     * @return void
     */
    protected function setIsTopicMessage(?bool $isTopicMessage): void
    {
        $this->isTopicMessage = $isTopicMessage;
    }

    /**
     * @return bool|null
     */
    public function getIsTopicMessage(): ?bool
    {
        return $this->isTopicMessage;
    }

    /**
     * @param bool|null $isAutomaticForward
     *
     * @return void
     */
    protected function setIsAutomaticForward(?bool $isAutomaticForward): void
    {
        $this->isAutomaticForward = $isAutomaticForward;
    }

    /**
     * @return bool|null
     */
    public function getIsAutomaticForward(): ?bool
    {
        return $this->isAutomaticForward;
    }

    /**
     * @param Message|null $replyToMessage
     *
     * @return void
     */
    protected function setReplyToMessage(?Message $replyToMessage): void
    {
        $this->replyToMessage = $replyToMessage;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    /**
     * @param User|null $viaBot
     *
     * @return void
     */
    protected function setViaBot(?User $viaBot): void
    {
        $this->viaBot = $viaBot;
    }

    /**
     * @return User|null
     */
    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    /**
     * @param int|null $editDate
     *
     * @return void
     */
    protected function setEditDate(?int $editDate): void
    {
        $this->editDate = $editDate;
    }

    /**
     * @return int|null
     */
    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    /**
     * @param bool|null $hasProtectedContent
     *
     * @return void
     */
    protected function setHasProtectedContent(?bool $hasProtectedContent): void
    {
        $this->hasProtectedContent = $hasProtectedContent;
    }

    /**
     * @return bool|null
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->hasProtectedContent;
    }

    /**
     * @param bool|null $isFromOffline
     *
     * @return void
     */
    protected function setIsFromOffline(?bool $isFromOffline): void
    {
        $this->isFromOffline = $isFromOffline;
    }

    /**
     * @return bool|null
     */
    public function getIsFromOffline(): ?bool
    {
        return $this->isFromOffline;
    }

    /**
     * @param string|null $mediaGroupId
     *
     * @return void
     */
    protected function setMediaGroupId(?string $mediaGroupId): void
    {
        $this->mediaGroupId = $mediaGroupId;
    }

    /**
     * @return string|null
     */
    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    /**
     * @param string|null $authorSignature
     *
     * @return void
     */
    protected function setAuthorSignature(?string $authorSignature): void
    {
        $this->authorSignature = $authorSignature;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    /**
     * @param string|null $text
     *
     * @return void
     */
    protected function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param ArrayOfMessageEntities|null $entities
     *
     * @return void
     */
    protected function setEntities(?ArrayOfMessageEntities $entities): void
    {
        $this->entities = $entities;
    }

    /**
     * @return ArrayOfMessageEntities|null
     */
    public function getEntities(): ?ArrayOfMessageEntities
    {
        return $this->entities;
    }

    /**
     * @param string|null $effectId
     *
     * @return void
     */
    protected function setEffectId(?string $effectId): void
    {
        $this->effectId = $effectId;
    }

    /**
     * @return string|null
     */
    public function getEffectId(): ?string
    {
        return $this->effectId;
    }

    /**
     * @param Audio|null $audio
     *
     * @return void
     */
    protected function setAudio(?Audio $audio): void
    {
        $this->audio = $audio;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * @param Document|null $document
     *
     * @return void
     */
    protected function setDocument(?Document $document): void
    {
        $this->document = $document;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param ArrayOfPhotoSizes|null $photo
     *
     * @return void
     */
    protected function setPhoto(?ArrayOfPhotoSizes $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return ArrayOfPhotoSizes|null
     */
    public function getPhoto(): ?ArrayOfPhotoSizes
    {
        return $this->photo;
    }

    /**
     * @param Sticker|null $sticker
     *
     * @return void
     */
    protected function setSticker(?Sticker $sticker): void
    {
        $this->sticker = $sticker;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * @param Video|null $video
     *
     * @return void
     */
    protected function setVideo(?Video $video): void
    {
        $this->video = $video;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * @param VideoNote|null $videoNote
     *
     * @return void
     */
    protected function setVideoNote(?VideoNote $videoNote): void
    {
        $this->videoNote = $videoNote;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    /**
     * @param Voice|null $voice
     *
     * @return void
     */
    protected function setVoice(?Voice $voice): void
    {
        $this->voice = $voice;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * @param string|null $caption
     *
     * @return void
     */
    protected function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param ArrayOfMessageEntities|null $captionEntities
     *
     * @return void
     */
    protected function setCaptionEntities(?ArrayOfMessageEntities $captionEntities): void
    {
        $this->captionEntities = $captionEntities;
    }

    /**
     * @return ArrayOfMessageEntities|null
     */
    public function getCaptionEntities(): ?ArrayOfMessageEntities
    {
        return $this->captionEntities;
    }

    /**
     * @param bool|null $showCaptionAboveMedia
     *
     * @return void
     */
    protected function setShowCaptionAboveMedia(?bool $showCaptionAboveMedia): void
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;
    }

    /**
     * @return bool|null
     */
    public function getShowCaptionAboveMedia(): ?bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * @param bool|null $hasMediaSpoiler
     *
     * @return void
     */
    protected function setHasMediaSpoiler(?bool $hasMediaSpoiler): void
    {
        $this->hasMediaSpoiler = $hasMediaSpoiler;
    }

    /**
     * @return bool|null
     */
    public function getHasMediaSpoiler(): ?bool
    {
        return $this->hasMediaSpoiler;
    }

    /**
     * @param Location|null $location
     *
     * @return void
     */
    protected function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * @param ArrayOfUsers|null $newChatMembers
     *
     * @return void
     */
    public function setNewChatMembers(?ArrayOfUsers $newChatMembers): void
    {
        $this->newChatMembers = $newChatMembers;
    }

    /**
     * @return ArrayOfUsers|null
     */
    public function getNewChatMembers(): ?ArrayOfUsers
    {
        return $this->newChatMembers;
    }

    /**
     * @param User|null $leftChatMember
     *
     * @return void
     */
    protected function setLeftChatMember(?User $leftChatMember): void
    {
        $this->leftChatMember = $leftChatMember;
    }

    /**
     * @return User|null
     */
    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    /**
     * @param string|null $newChatTitle
     *
     * @return void
     */
    protected function setNewChatTitle(?string $newChatTitle): void
    {
        $this->newChatTitle = $newChatTitle;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * @param ArrayOfPhotoSizes|null $newChatPhoto
     *
     * @return void
     */
    protected function setNewChatPhoto(?ArrayOfPhotoSizes $newChatPhoto): void
    {
        $this->newChatPhoto = $newChatPhoto;
    }

    /**
     * @return ArrayOfPhotoSizes|null
     */
    public function getNewChatPhoto(): ?ArrayOfPhotoSizes
    {
        return $this->newChatPhoto;
    }

    /**
     * @param bool|null $deleteChatPhoto
     *
     * @return void
     */
    protected function setDeleteChatPhoto(?bool $deleteChatPhoto): void
    {
        $this->deleteChatPhoto = $deleteChatPhoto;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * @param bool|null $groupChatCreated
     *
     * @return void
     */
    protected function setGroupChatCreated(?bool $groupChatCreated): void
    {
        $this->groupChatCreated = $groupChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    /**
     * @param bool|null $supergroupChatCreated
     *
     * @return void
     */
    protected function setSupergroupChatCreated(?bool $supergroupChatCreated): void
    {
        $this->supergroupChatCreated = $supergroupChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * @param bool|null $channelChatCreated
     *
     * @return void
     */
    protected function setChannelChatCreated(?bool $channelChatCreated): void
    {
        $this->channelChatCreated = $channelChatCreated;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    /**
     * @param int|null $migrateToChatId
     *
     * @return void
     */
    protected function setMigrateToChatId(?int $migrateToChatId): void
    {
        $this->migrateToChatId = $migrateToChatId;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * @param int|null $migrateFromChatId
     *
     * @return void
     */
    protected function setMigrateFromChatId(?int $migrateFromChatId): void
    {
        $this->migrateFromChatId = $migrateFromChatId;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    /**
     * @param string|null $connectedWebsite
     *
     * @return void
     */
    protected function setConnectedWebsite(?string $connectedWebsite): void
    {
        $this->connectedWebsite = $connectedWebsite;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }
}
