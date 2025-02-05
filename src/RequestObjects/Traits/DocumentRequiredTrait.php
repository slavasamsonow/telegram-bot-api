<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects\Traits;

use Slavasamsonow\TelegramBotApi\InputFile;

trait DocumentRequiredTrait
{
    use DocumentExtraTrait;

    /**
     * @var InputFile|string
     */
    protected InputFile|string $document;

    /**
     * @param InputFile|string $document
     *
     * @return void
     */
    protected function setDocument(InputFile|string $document): void
    {
        if ($document instanceof InputFile) {
            $document->setField('document');
        }

        $this->document = $document;
    }
}
