<?php

namespace Slavasamsonow\TelegramBotApi;

class InputFile
{
    /**
     * @var mixed
     */
    protected mixed $file;

    /**
     * @var string
     */
    protected string $fileName;

    /**
     * @var string|null
     */
    protected ?string $field = null;

    /**
     * @var bool
     */
    protected bool $withAttach = false;

    /**
     * @param mixed $file
     * @param string|null $fileName
     */
    public function __construct(mixed $file, ?string $fileName = null)
    {
        $this->setFile($file);
        if ($fileName == null) {
            $fileName = uniqid();
        }
        $this->setFileName($fileName);
    }

    /**
     * @param mixed $file
     *
     * @return void
     */
    protected function setFile(mixed $file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getFile(): mixed
    {
        return $this->file;
    }

    /**
     * @param string|null $fileName
     *
     * @return void
     */
    protected function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $field
     *
     * @return void
     */
    public function setField(string $field): void
    {
        $this->field = $field;
    }

    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @return void
     */
    public function withAttach(): void
    {
        $this->withAttach = true;
    }

    /**
     * @return bool
     */
    public function getWithAttach(): bool
    {
        return $this->withAttach;
    }
}
