<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait ButtonRequestChatTrait
{
    use RequestIdRequiredTrait;
    use RequestUsernameOptionalTrait;
    use RequestPhotoOptionalTrait;

    /**
     * @var bool
     */
    protected bool $chatIsChannel;

    /**
     * @var bool|null
     */
    protected ?bool $chatIsForum;

    /**
     * @var bool|null
     */
    protected ?bool $chatHasUsername;

    /**
     * @var bool|null
     */
    protected ?bool $chatIsCreated;

    // TODO: user_administrator_rights

    // TODO: bot_administrator_rights

    /**
     * @var bool|null
     */
    protected ?bool $botIsMember;
    /**
     * @var bool|null
     */
    protected ?bool $requestTitle;
    /**
     * @var bool|null
     */
    protected ?bool $requestPhoto;

    /**
     * @param bool $chatIsChannel
     *
     * @return void
     */
    protected function setChatIsChannel(bool $chatIsChannel): void
    {
        $this->chatIsChannel = $chatIsChannel;
    }

    /**
     * @param bool|null $chatIsForum
     *
     * @return void
     */
    public function setChatIsForum(?bool $chatIsForum): void
    {
        $this->chatIsForum = $chatIsForum;
    }

    /**
     * @param bool|null $chatHasUsername
     *
     * @return void
     */
    public function setChatHasUsername(?bool $chatHasUsername): void
    {
        $this->chatHasUsername = $chatHasUsername;
    }

    /**
     * @param bool|null $chatIsCreated
     *
     * @return void
     */
    public function setChatIsCreated(?bool $chatIsCreated): void
    {
        $this->chatIsCreated = $chatIsCreated;
    }

    /**
     * @param bool|null $botIsMember
     *
     * @return void
     */
    public function setBotIsMember(?bool $botIsMember): void
    {
        $this->botIsMember = $botIsMember;
    }

    /**
     * @param bool|null $requestTitle
     *
     * @return void
     */
    public function setRequestTitle(?bool $requestTitle): void
    {
        $this->requestTitle = $requestTitle;
    }
}
