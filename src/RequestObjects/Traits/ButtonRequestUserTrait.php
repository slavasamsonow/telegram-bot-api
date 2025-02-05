<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait ButtonRequestUserTrait
{
    use RequestIdRequiredTrait;
    use RequestUsernameOptionalTrait;
    use RequestPhotoOptionalTrait;

    /**
     * @var bool|null
     */
    protected ?bool $userIsBot;

    /**
     * @var bool|null
     */
    protected ?bool $userIsPremium;

    /**
     * @var int|null
     */
    protected ?int $maxQuantity;

    /**
     * @var bool|null
     */
    protected ?bool $requestName;


    /**
     * @param bool|null $userIsBot
     *
     * @return void
     */
    public function setUserIsBot(?bool $userIsBot): void
    {
        $this->userIsBot = $userIsBot;
    }

    /**
     * @param bool|null $userIsPremium
     *
     * @return void
     */
    public function setUserIsPremium(?bool $userIsPremium): void
    {
        $this->userIsPremium = $userIsPremium;
    }


    /**
     * @param int|null $maxQuantity
     *
     * @return void
     * @throws TelegramBotApiException
     */
    public function setMaxQuantity(?int $maxQuantity): void
    {
        if ($maxQuantity != null) {
            if ($maxQuantity < 1) {
                throw new TelegramBotApiException('Max quantity must be greater than 0');
            } elseif ($maxQuantity > 10) {
                throw new TelegramBotApiException('Max quantity must be less than 10');
            }
        }
        $this->maxQuantity = $maxQuantity;
    }

    /**
     * @param bool|null $requestName
     *
     * @return void
     */
    public function setRequestName(?bool $requestName): void
    {
        $this->requestName = $requestName;
    }
}
