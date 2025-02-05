<?php

namespace Slavasamsonow\TelegramBotApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Slavasamsonow\TelegramBotApi\Exceptions\TelegramBotApiException;
use Slavasamsonow\TelegramBotApi\RequestObjects\BaseRequestObject;

trait Http
{
    /**
     * @var Client|null
     */
    private ?Client $client = null;

    /**
     * @return Client
     */
    protected function getClient(): Client
    {
        if ($this->client === null) {
            $this->client = new Client();
        }

        return $this->client;
    }

    /**
     * @param string $method
     * @param array $data
     *
     * @return array
     * @throws TelegramBotApiException
     */
    protected function get(string $method, array $data = []): array
    {
        $url = $this->endpoint . $method;
        if ($data != []) {
            $data = ['query' => $data];
        }
        try {
            return $this->sendRequest('GET', $url, $data);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException($e->getMessage(), $e->getCode(), $e);
        }
    }


    /**
     * @param string $method
     * @param BaseRequestObject $data
     *
     * @return array
     * @throws TelegramBotApiException
     */
    protected function post(string $method, BaseRequestObject $data): array
    {
        $url = $this->endpoint . $method;
        if ($data != []) {
            $multipart = $data->toMultipart();
            if ($multipart != []) {
                $data = ['multipart' => $data->toMultipart()];
            } else {
                $data = [];
            }
        }
        try {
            return $this->sendRequest('POST', $url, $data);
        } catch (TelegramBotApiException $e) {
            throw new TelegramBotApiException($e->getMessage(), $e->getCode(), $e);
        }
    }


    /**
     * @param $method
     * @param string $url
     * @param array $data
     *
     * @return array
     * @throws TelegramBotApiException
     */
    protected function sendRequest($method, string $url, array $data = []): array
    {
        try {
            $response = $this->getClient()->request($method, $url, $data);
            return json_decode($response->getBody(), true);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBody = json_decode($response->getBody(), true);
            throw new TelegramBotApiException($responseBody['description'], $responseBody['error_code']);
        } catch (GuzzleException $e) {
            throw new TelegramBotApiException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function isFileId(mixed $value): bool
    {
        if (!is_string($value)) {
            return false;
        }

        return preg_match('#^[\w\-]{20,}+$#u', trim($value)) > 0;
    }

    /**
     * @param $file
     *
     * @return bool
     */
    protected function isInputFile($file): bool
    {
        return $file instanceof InputFile;
    }
}
