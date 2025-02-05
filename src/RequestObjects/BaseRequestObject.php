<?php

namespace Slavasamsonow\TelegramBotApi\RequestObjects;

use Slavasamsonow\TelegramBotApi\BaseObject;
use Slavasamsonow\TelegramBotApi\InputFile;
use Slavasamsonow\TelegramBotApi\InputFileCollection;
use Slavasamsonow\TelegramBotApi\Objects\BaseTelegramObject;
use UnitEnum;

abstract class BaseRequestObject extends BaseObject
{
    /**
     * @return array
     */
    public function toMultipart(): array
    {
        $output = [];

        foreach (get_object_vars($this) as $key => $value) {
            $newKey = self::toSnakeCase($key);
            if (!is_null($this->$key)) {
                $contents = $this->parseObject($value);
                if ($contents != null) {
                    if (is_array($contents)) {
                        $contents = json_encode($contents);
                    }
                    $output[] = [
                        'name' => $newKey,
                        'contents' => $contents,
                    ];
                }
            }
        }

        foreach (InputFileCollection::getItems() as $item) {
            $output[] = [
                'name' => $item->getField(),
                'contents' => $item->getFile(),
                'filename' => $item->getFileName(),
            ];
        }

        return $output;
    }

    /**
     * @param $value
     *
     * @return array|mixed|string|null
     */
    protected function parseObject($value): mixed
    {
        if (is_object($value)) {
            if ($value instanceof UnitEnum) {
                $value = $value->value ?? $value->name;
            } elseif (
                $value instanceof BaseRequestObject
                || $value instanceof BaseCollectionObject
                || $value instanceof BaseTelegramObject
            ) {
                $value = $value->toArray();
            } elseif ($value instanceof InputFile) {
                InputFileCollection::addItem($value);
                if ($value->getWithAttach()) {
                    $value = 'attach://' . $value->getFileName();
                } else {
                    $value = null;
                }
            } else {
                echo 'Not found ' . get_class($value);
            }
        }

        return $value;
    }
}
