<?php

namespace Slavasamsonow\TelegramBotApi\Objects;

class MaskPosition extends BaseTelegramObject
{
    /**
     * @var array
     */
    protected static array $map = [
        'point' => true,
        'x_shift' => true,
        'y_shift' => true,
        'scale' => true,
    ];

    /**
     * @var string
     */
    protected string $point;

    /**
     * @var float
     */
    protected float $xShift;

    /**
     * @var float
     */
    protected float $yShift;

    /**
     * @var float
     */
    protected float $scale;

    /**
     * @param string $point
     *
     * @return void
     */
    protected function setPoint(string $point): void
    {
        $this->point = $point;
    }

    /**
     * @return string
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * @param float $xShift
     *
     * @return void
     */
    protected function setXShift(float $xShift): void
    {
        $this->xShift = $xShift;
    }

    /**
     * @return float
     */
    public function getXShift(): float
    {
        return $this->xShift;
    }

    /**
     * @param float $yShift
     *
     * @return void
     */
    protected function setYShift(float $yShift): void
    {
        $this->yShift = $yShift;
    }

    /**
     * @return float
     */
    public function getYShift(): float
    {
        return $this->yShift;
    }

    /**
     * @param float $scale
     *
     * @return void
     */
    protected function setScale(float $scale): void
    {
        $this->scale = $scale;
    }

    /**
     * @return float
     */
    public function getScale(): float
    {
        return $this->scale;
    }
}
