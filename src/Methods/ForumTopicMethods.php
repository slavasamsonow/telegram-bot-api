<?php

namespace Slavasamsonow\TelegramBotApi\Methods;

use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;

trait ForumTopicMethods
{
    /**
     * @return array
     * @throws TelegramBotApiException
     */
    public function getForumTopicIconStickers(): array
    {
        return $this->get('getForumTopicIconStickers');
    }

    // TODO: createForumTopic
    // TODO: editForumTopic
    // TODO: closeForumTopic
    // TODO: reopenForumTopic
    // TODO: deleteForumTopic
    // TODO: unpinAllForumTopicMessages
    // TODO: editGeneralForumTopic
    // TODO: closeGeneralForumTopic
    // TODO: reopenGeneralForumTopic
    // TODO: hideGeneralForumTopic
    // TODO: unhideGeneralForumTopic
    // TODO: unpinAllGeneralForumTopicMessages
}
