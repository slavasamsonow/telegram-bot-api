<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\RequestObjects\ReplyParameters;

trait ReplyParametersOptionalTrait
{
    /**
     * @var ReplyParameters|null
     */
    protected ?ReplyParameters $replyParameters;

    /**
     * @param ReplyParameters|null $replyParameters
     *
     * @return void
     */
    public function setReplyParameters(?ReplyParameters $replyParameters): void
    {
        $this->replyParameters = $replyParameters;
    }
}
