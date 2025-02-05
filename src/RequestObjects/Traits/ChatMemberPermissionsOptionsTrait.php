<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ChatMemberPermissionsOptionsTrait
{
    use ChatAdministratorRightOptionsTrait;

    /**
     * @var bool|null
     */
    protected ?bool $canSendMessages;

    /**
     * @var bool|null
     */
    protected ?bool $canSendAudios;

    /**
     * @var bool|null
     */
    protected ?bool $canSendDocuments;

    /**
     * @var bool|null
     */
    protected ?bool $canSendPhotos;

    /**
     * @var bool|null
     */
    protected ?bool $canSendVideos;

    /**
     * @var bool|null
     */
    protected ?bool $canSendVideoNotes;

    /**
     * @var bool|null
     */
    protected ?bool $canSendVoiceNotes;

    /**
     * @var bool|null
     */
    protected ?bool $canSendPolls;

    /**
     * @var bool|null
     */
    protected ?bool $canSendOtherMessages;

    /**
     * @var bool|null
     */
    protected ?bool $canAddWebPagePreviews;

    /**
     * @param bool|null $canSendMessages
     *
     * @return void
     */
    public function setCanSendMessages(?bool $canSendMessages): void
    {
        $this->canSendMessages = $canSendMessages;
    }

    /**
     * @param bool|null $canSendAudios
     *
     * @return void
     */
    public function setCanSendAudios(?bool $canSendAudios): void
    {
        $this->canSendAudios = $canSendAudios;
    }

    /**
     * @param bool|null $canSendDocuments
     *
     * @return void
     */
    public function setCanSendDocuments(?bool $canSendDocuments): void
    {
        $this->canSendDocuments = $canSendDocuments;
    }

    /**
     * @param bool|null $canSendPhotos
     *
     * @return void
     */
    public function setCanSendPhotos(?bool $canSendPhotos): void
    {
        $this->canSendPhotos = $canSendPhotos;
    }

    /**
     * @param bool|null $canSendVideos
     *
     * @return void
     */
    public function setCanSendVideos(?bool $canSendVideos): void
    {
        $this->canSendVideos = $canSendVideos;
    }

    /**
     * @param bool|null $canSendVideoNotes
     *
     * @return void
     */
    public function setCanSendVideoNotes(?bool $canSendVideoNotes): void
    {
        $this->canSendVideoNotes = $canSendVideoNotes;
    }

    /**
     * @param bool|null $canSendVoiceNotes
     *
     * @return void
     */
    public function setCanSendVoiceNotes(?bool $canSendVoiceNotes): void
    {
        $this->canSendVoiceNotes = $canSendVoiceNotes;
    }

    /**
     * @param bool|null $canSendPolls
     *
     * @return void
     */
    public function setCanSendPolls(?bool $canSendPolls): void
    {
        $this->canSendPolls = $canSendPolls;
    }

    /**
     * @param bool|null $canSendOtherMessages
     *
     * @return void
     */
    public function setCanSendOtherMessages(?bool $canSendOtherMessages): void
    {
        $this->canSendOtherMessages = $canSendOtherMessages;
    }

    /**
     * @param bool|null $canAddWebPagePreviews
     *
     * @return void
     */
    public function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): void
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
    }
}
