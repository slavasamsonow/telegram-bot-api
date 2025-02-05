<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

trait VideoExtraTrait
{
    use DurationOptionalTrait;
    use WidthHeightOptionalTrait;
    use ThumbnailOptionalTrait;
    use CaptionOptionalRequestTrait;
    use ShowCaptionAboveMediaOptionalTrait;
    use HasSpoilerOptionalTrait;
    use SupportsStreamingOptionalTrait;
}
