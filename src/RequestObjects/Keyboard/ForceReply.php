<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Keyboard;

use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\ForceReplyRequiredTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\InputFieldPlaceholderOptionalTrait;
use Slavasamsonow\TelegramBotApi\RequestObjects\Traits\SelectiveOptionalTrait;

class ForceReply extends BaseRequestObject
{
    use ForceReplyRequiredTrait;
    use InputFieldPlaceholderOptionalTrait;
    use SelectiveOptionalTrait;

    /**
     * @param bool $forceReply
     * @param string|null $inputFieldPlaceholder
     * @param bool|null $selective
     */
    public function __construct(
        bool $forceReply,
        ?string $inputFieldPlaceholder = null,
        ?bool $selective = null
    ) {
        $this->setForceReply($forceReply);
        $this->setInputFieldPlaceholder($inputFieldPlaceholder);
        $this->setSelective($selective);
    }
}
