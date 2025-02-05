<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait PhotoExtraTrait
{
    use ShowCaptionAboveMediaOptionalTrait;
    use CaptionOptionalRequestTrait;
    use HasSpoilerOptionalTrait;
}
