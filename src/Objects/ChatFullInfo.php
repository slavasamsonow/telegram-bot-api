<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

use Slavasamsonow\TelegramBotApi\ArrayOfObject\ArrayOfReactionTypes;
use Slavasamsonow\TelegramBotApi\Enums\ChatTypeEnum;

class ChatFullInfo extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'id' => true,
        'type' => ChatTypeEnum::class,
        'title' => true,
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'is_forum' => true,
        'accent_color_id' => true,
        'max_reaction_count' => true,
        'photo' => ChatPhoto::class,
        'active_usernames' => true,
        'birthdate' => Birthdate::class,
        'business_intro' => BusinessIntro::class,
        'business_location' => BusinessLocation::class,
        'business_opening_hours' => BusinessOpeningHours::class,
        'personal_chat' => Chat::class,
        'available_reactions' => ArrayOfReactionTypes::class,
        'background_custom_emoji_id' => true,
        'profile_accent_color_id' => true,
        'profile_background_custom_emoji_id' => true,
        'emoji_status_custom_emoji_id' => true,
        'emoji_status_expiration_date' => true,
        'bio' => true,
        'has_private_forwards' => true,
        'has_restricted_voice_and_video_messages' => true,
        'join_to_send_messages' => true,
        'join_by_request' => true,
        'description' => true,
        'invite_link' => true,
        'pinned_message' => Message::class,
        'permissions' => ChatPermissions::class,
        'can_send_paid_media' => true,
        'slow_mode_delay' => true,
        'unrestrict_boost_count' => true,
        'message_auto_delete_time' => true,
        'has_aggressive_anti_spam_enabled' => true,
        'has_hidden_members' => true,
        'has_protected_content' => true,
        'has_visible_history' => true,
        'sticker_set_name' => true,
        'can_set_sticker_set' => true,
        'custom_emoji_sticker_set_name' => true,
        'linked_chat_id' => true,
        'location' => ChatLocation::class,
    ];

    /**
     * @var int
     */
    public readonly int $id;

    /**
     * @var ChatTypeEnum
     */
    public readonly ChatTypeEnum $type;

    /**
     * @var string|null
     */
    public readonly ?string $title;

    /**
     * @var string|null
     */
    public readonly ?string $username;

    /**
     * @var string|null
     */
    public readonly ?string $firstName;

    /**
     * @var string|null
     */
    public readonly ?string $lastName;

    /**
     * @var bool|null
     */
    public readonly ?bool $isForum;

    /**
     * @var int
     */
    public readonly int $accentColorId;

    /**
     * @var int
     */
    public readonly int $maxReactionCount;

    /**
     * @var ChatPhoto|null
     */
    public readonly ?ChatPhoto $photo;

    /**
     * @var array|null
     */
    public readonly ?array $activeUsernames;

    /**
     * @var Birthdate|null
     */
    public readonly ?Birthdate $birthdate;

    /**
     * @var BusinessIntro|null
     */
    public readonly ?BusinessIntro $businessIntro;

    /**
     * @var BusinessLocation|null
     */
    public readonly ?BusinessLocation $businessLocation;

    /**
     * @var BusinessOpeningHours|null
     */
    public readonly ?BusinessOpeningHours $businessOpeningHours;

    /**
     * @var Chat|null
     */
    public readonly ?Chat $personalChat;

    /**
     * @var ArrayOfReactionTypes|null
     */
    public readonly ?ArrayOfReactionTypes $availableReactions;

    /**
     * @var string|null
     */
    public readonly ?string $backgroundCustomEmojiId;

    /**
     * @var int|null
     */
    public readonly ?int $profileAccentColorId;

    /**
     * @var string|null
     */
    public readonly ?string $profileBackgroundCustomEmojiId;

    /**
     * @var string|null
     */
    public readonly ?string $emojiStatusCustomEmojiId;

    /**
     * @var int|null
     */
    public readonly ?int $emojiStatusExpirationDate;

    /**
     * @var string|null
     */
    public readonly ?string $bio;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasPrivateForwards;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasRestrictedVoiceAndVideoMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $joinToSendMessages;

    /**
     * @var bool|null
     */
    public readonly ?bool $joinByRequest;

    /**
     * @var string|null
     */
    public readonly ?string $description;

    /**
     * @var string|null
     */
    public readonly ?string $inviteLink;

    /**
     * @var Message|null
     */
    public readonly ?Message $pinnedMessage;

    /**
     * @var ChatPermissions|null
     */
    public readonly ?ChatPermissions $permissions;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSendPaidMedia;

    /**
     * @var int|null
     */
    public readonly ?int $slowModeDelay;

    /**
     * @var int|null
     */
    public readonly ?int $unrestrictBoostCount;

    /**
     * @var int|null
     */
    public readonly ?int $messageAutoDeleteTime;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasAggressiveAntiSpamEnabled;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasHiddenMembers;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasProtectedContent;

    /**
     * @var bool|null
     */
    public readonly ?bool $hasVisibleHistory;

    /**
     * @var string|null
     */
    public readonly ?string $stickerSetName;

    /**
     * @var bool|null
     */
    public readonly ?bool $canSetStickerSet;

    /**
     * @var string|null
     */
    public readonly ?string $customEmojiStickerSetName;

    /**
     * @var int|null
     */
    public readonly ?int $linkedChatId;

    /**
     * @var ChatLocation|null
     */
    public readonly ?ChatLocation $location;


    /**
     * @param int $id
     *
     * @return void
     */
    protected function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param ChatTypeEnum $type
     *
     * @return void
     */
    protected function setType(ChatTypeEnum $type): void
    {
        $this->type = $type;
    }

    /**
     * @return ChatTypeEnum
     */
    public function getType(): ChatTypeEnum
    {
        return $this->type;
    }

    /**
     * @param string|null $title
     *
     * @return void
     */
    protected function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $username
     *
     * @return void
     */
    protected function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $firstName
     *
     * @return void
     */
    protected function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $lastName
     *
     * @return void
     */
    protected function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param bool|null $isForum
     *
     * @return void
     */
    protected function setIsForum(?bool $isForum): void
    {
        $this->isForum = $isForum;
    }

    /**
     * @return bool|null
     */
    public function getIsForum(): ?bool
    {
        return $this->isForum;
    }

    /**
     * @param int $accentColorId
     *
     * @return void
     */
    protected function setAccentColorId(int $accentColorId): void
    {
        $this->accentColorId = $accentColorId;
    }

    /**
     * @return int
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * @param int $maxReactionCount
     *
     * @return void
     */
    protected function setMaxReactionCount(int $maxReactionCount): void
    {
        $this->maxReactionCount = $maxReactionCount;
    }

    /**
     * @return int
     */
    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    /**
     * @param ChatPhoto|null $photo
     *
     * @return void
     */
    protected function setPhoto(?ChatPhoto $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * @param array|null $activeUsernames
     *
     * @return void
     */
    protected function setActiveUsernames(?array $activeUsernames): void
    {
        $this->activeUsernames = $activeUsernames;
    }

    /**
     * @return array|null
     */
    public function getActiveUsernames(): ?array
    {
        return $this->activeUsernames;
    }

    /**
     * @param Birthdate|null $birthdate
     *
     * @return void
     */
    protected function setBirthdate(?Birthdate $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return Birthdate|null
     */
    public function getBirthdate(): ?Birthdate
    {
        return $this->birthdate;
    }

    /**
     * @param BusinessIntro|null $businessIntro
     *
     * @return void
     */
    protected function setBusinessIntro(?BusinessIntro $businessIntro): void
    {
        $this->businessIntro = $businessIntro;
    }

    /**
     * @return BusinessIntro|null
     */
    public function getBusinessIntro(): ?BusinessIntro
    {
        return $this->businessIntro;
    }

    /**
     * @param BusinessLocation|null $businessLocation
     *
     * @return void
     */
    protected function setBusinessLocation(?BusinessLocation $businessLocation): void
    {
        $this->businessLocation = $businessLocation;
    }

    /**
     * @return BusinessLocation|null
     */
    public function getBusinessLocation(): ?BusinessLocation
    {
        return $this->businessLocation;
    }

    /**
     * @param BusinessOpeningHours|null $businessOpeningHours
     *
     * @return void
     */
    protected function setBusinessOpeningHours(?BusinessOpeningHours $businessOpeningHours): void
    {
        $this->businessOpeningHours = $businessOpeningHours;
    }

    /**
     * @return BusinessOpeningHours|null
     */
    public function getBusinessOpeningHours(): ?BusinessOpeningHours
    {
        return $this->businessOpeningHours;
    }

    /**
     * @param Chat|null $personalChat
     *
     * @return void
     */
    protected function setPersonalChat(?Chat $personalChat): void
    {
        $this->personalChat = $personalChat;
    }

    /**
     * @return Chat|null
     */
    public function getPersonalChat(): ?Chat
    {
        return $this->personalChat;
    }

    /**
     * @param ArrayOfReactionTypes|null $availableReactions
     *
     * @return void
     */
    protected function setAvailableReactions(?ArrayOfReactionTypes $availableReactions): void
    {
        $this->availableReactions = $availableReactions;
    }

    /**
     * @return ArrayOfReactionTypes|null
     */
    public function getAvailableReactions(): ?ArrayOfReactionTypes
    {
        return $this->availableReactions;
    }

    /**
     * @param string|null $backgroundCustomEmojiId
     *
     * @return void
     */
    protected function setBackgroundCustomEmojiId(?string $backgroundCustomEmojiId): void
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;
    }

    /**
     * @return string|null
     */
    public function getBackgroundCustomEmojiId(): ?string
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * @param int|null $profileAccentColorId
     *
     * @return void
     */
    protected function setProfileAccentColorId(?int $profileAccentColorId): void
    {
        $this->profileAccentColorId = $profileAccentColorId;
    }

    /**
     * @return int|null
     */
    public function getProfileAccentColorId(): ?int
    {
        return $this->profileAccentColorId;
    }

    /**
     * @param string|null $profileBackgroundCustomEmojiId
     *
     * @return void
     */
    protected function setProfileBackgroundCustomEmojiId(?string $profileBackgroundCustomEmojiId): void
    {
        $this->profileBackgroundCustomEmojiId = $profileBackgroundCustomEmojiId;
    }

    /**
     * @return string|null
     */
    public function getProfileBackgroundCustomEmojiId(): ?string
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    /**
     * @param string|null $emojiStatusCustomEmojiId
     *
     * @return void
     */
    protected function setEmojiStatusCustomEmojiId(?string $emojiStatusCustomEmojiId): void
    {
        $this->emojiStatusCustomEmojiId = $emojiStatusCustomEmojiId;
    }

    /**
     * @return string|null
     */
    public function getEmojiStatusCustomEmojiId(): ?string
    {
        return $this->emojiStatusCustomEmojiId;
    }

    /**
     * @param int|null $emojiStatusExpirationDate
     *
     * @return void
     */
    protected function setEmojiStatusExpirationDate(?int $emojiStatusExpirationDate): void
    {
        $this->emojiStatusExpirationDate = $emojiStatusExpirationDate;
    }

    /**
     * @return int|null
     */
    public function getEmojiStatusExpirationDate(): ?int
    {
        return $this->emojiStatusExpirationDate;
    }

    /**
     * @param string|null $bio
     *
     * @return void
     */
    protected function setBio(?string $bio): void
    {
        $this->bio = $bio;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * @param bool|null $hasPrivateForwards
     *
     * @return void
     */
    protected function setHasPrivateForwards(?bool $hasPrivateForwards): void
    {
        $this->hasPrivateForwards = $hasPrivateForwards;
    }

    /**
     * @return bool|null
     */
    public function getHasPrivateForwards(): ?bool
    {
        return $this->hasPrivateForwards;
    }

    /**
     * @param bool|null $hasRestrictedVoiceAndVideoMessages
     *
     * @return void
     */
    protected function setHasRestrictedVoiceAndVideoMessages(?bool $hasRestrictedVoiceAndVideoMessages): void
    {
        $this->hasRestrictedVoiceAndVideoMessages = $hasRestrictedVoiceAndVideoMessages;
    }

    /**
     * @return bool|null
     */
    public function getHasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->hasRestrictedVoiceAndVideoMessages;
    }

    /**
     * @param bool|null $joinToSendMessages
     *
     * @return void
     */
    protected function setJoinToSendMessages(?bool $joinToSendMessages): void
    {
        $this->joinToSendMessages = $joinToSendMessages;
    }

    /**
     * @return bool|null
     */
    public function getJoinToSendMessages(): ?bool
    {
        return $this->joinToSendMessages;
    }

    /**
     * @param bool|null $joinByRequest
     *
     * @return void
     */
    protected function setJoinByRequest(?bool $joinByRequest): void
    {
        $this->joinByRequest = $joinByRequest;
    }

    /**
     * @return bool|null
     */
    public function getJoinByRequest(): ?bool
    {
        return $this->joinByRequest;
    }

    /**
     * @param string|null $description
     *
     * @return void
     */
    protected function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $inviteLink
     *
     * @return void
     */
    protected function setInviteLink(?string $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    /**
     * @param Message|null $pinnedMessage
     *
     * @return void
     */
    protected function setPinnedMessage(?Message $pinnedMessage): void
    {
        $this->pinnedMessage = $pinnedMessage;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * @param ChatPermissions|null $permissions
     *
     * @return void
     */
    protected function setPermissions(?ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * @param bool|null $canSendPaidMedia
     *
     * @return void
     */
    protected function setCanSendPaidMedia(?bool $canSendPaidMedia): void
    {
        $this->canSendPaidMedia = $canSendPaidMedia;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPaidMedia(): ?bool
    {
        return $this->canSendPaidMedia;
    }

    /**
     * @param int|null $slowModeDelay
     *
     * @return void
     */
    protected function setSlowModeDelay(?int $slowModeDelay): void
    {
        $this->slowModeDelay = $slowModeDelay;
    }

    /**
     * @return int|null
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    /**
     * @param int|null $unrestrictBoostCount
     *
     * @return void
     */
    protected function setUnrestrictBoostCount(?int $unrestrictBoostCount): void
    {
        $this->unrestrictBoostCount = $unrestrictBoostCount;
    }

    /**
     * @return int|null
     */
    public function getUnrestrictBoostCount(): ?int
    {
        return $this->unrestrictBoostCount;
    }

    /**
     * @param int|null $messageAutoDeleteTime
     *
     * @return void
     */
    protected function setMessageAutoDeleteTime(?int $messageAutoDeleteTime): void
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
    }

    /**
     * @return int|null
     */
    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * @param bool|null $hasAggressiveAntiSpamEnabled
     *
     * @return void
     */
    protected function setHasAggressiveAntiSpamEnabled(?bool $hasAggressiveAntiSpamEnabled): void
    {
        $this->hasAggressiveAntiSpamEnabled = $hasAggressiveAntiSpamEnabled;
    }

    /**
     * @return bool|null
     */
    public function getHasAggressiveAntiSpamEnabled(): ?bool
    {
        return $this->hasAggressiveAntiSpamEnabled;
    }

    /**
     * @param bool|null $hasHiddenMembers
     *
     * @return void
     */
    protected function setHasHiddenMembers(?bool $hasHiddenMembers): void
    {
        $this->hasHiddenMembers = $hasHiddenMembers;
    }

    /**
     * @return bool|null
     */
    public function getHasHiddenMembers(): ?bool
    {
        return $this->hasHiddenMembers;
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
     * @param bool|null $hasVisibleHistory
     *
     * @return void
     */
    protected function setHasVisibleHistory(?bool $hasVisibleHistory): void
    {
        $this->hasVisibleHistory = $hasVisibleHistory;
    }

    /**
     * @return bool|null
     */
    public function getHasVisibleHistory(): ?bool
    {
        return $this->hasVisibleHistory;
    }

    /**
     * @param string|null $stickerSetName
     *
     * @return void
     */
    protected function setStickerSetName(?string $stickerSetName): void
    {
        $this->stickerSetName = $stickerSetName;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    /**
     * @param bool|null $canSetStickerSet
     *
     * @return void
     */
    protected function setCanSetStickerSet(?bool $canSetStickerSet): void
    {
        $this->canSetStickerSet = $canSetStickerSet;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * @param string|null $customEmojiStickerSetName
     *
     * @return void
     */
    protected function setCustomEmojiStickerSetName(?string $customEmojiStickerSetName): void
    {
        $this->customEmojiStickerSetName = $customEmojiStickerSetName;
    }

    /**
     * @return string|null
     */
    public function getCustomEmojiStickerSetName(): ?string
    {
        return $this->customEmojiStickerSetName;
    }

    /**
     * @param int|null $linkedChatId
     *
     * @return void
     */
    protected function setLinkedChatId(?int $linkedChatId): void
    {
        $this->linkedChatId = $linkedChatId;
    }

    /**
     * @return int|null
     */
    public function getLinkedChatId(): ?int
    {
        return $this->linkedChatId;
    }

    /**
     * @param ChatLocation|null $location
     *
     * @return void
     */
    protected function setLocation(?ChatLocation $location): void
    {
        $this->location = $location;
    }

    /**
     * @return ChatLocation|null
     */
    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }
}
