<?php

namespace Slavasamsonow\TelegramBotApi;

use Slavasamsonow\TelegramBotApi\Objects\BaseTelegramObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseCollectionObject;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;
use UnitEnum;

class BaseObject
{
    /**
     * @param $data
     *
     * @return static
     */
    public static function fromResponse($data): static
    {
        $inst = new static();
        $inst->map($data);
        return $inst;
    }

    /**
     * @param $data
     *
     * @return void
     */
    protected function map($data): void
    {
        foreach (static::$map as $key => $type) {
            $method = 'set' . self::toCamelCase($key);
            if (isset($data[$key]) && (!is_array($data[$key]) || !empty($data[$key]))) {
                if ($type === true) {
                    $this->$method($data[$key]);
                } elseif (str_ends_with($type, 'Enum')) {
                    $this->$method($type::from($data[$key]));
                } else {
                    $this->$method($type::fromResponse($data[$key]));
                }
            } else {
                $this->$method(null);
            }
        }
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $output = [];

        foreach (get_object_vars($this) as $key => $value) {
            $newKey = self::toSnakeCase($key);
            if (!is_null($this->$key)) {
                $output[$newKey] = $this->parseObject($value);
            }
        }

        return $output;
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    protected function parseObject($value): mixed
    {
        if (is_object($value)) {
            if ($value instanceof UnitEnum) {
                $value =  $value->value ?? $value->name;
            } elseif (
                $value instanceof BaseRequestObject
                || $value instanceof BaseCollectionObject
                || $value instanceof BaseTelegramObject
            ) {
                $value =  $value->toArray();
            } else {
                echo 'Not found ' . get_class($value);
            }
        }

        return $value;
    }

    /**
     * @param $str
     *
     * @return string
     */
    protected static function toCamelCase($str): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
    }

    /**
     * @param string $string
     * @param string $delimiter
     *
     * @return string
     */
    protected static function toSnakeCase(string $string, string $delimiter = "_"): string
    {
        return mb_strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $string), 'UTF-8');
    }
}
