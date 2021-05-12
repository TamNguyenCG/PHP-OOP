<?php
namespace source;

use JetBrains\PhpStorm\Pure;

class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;

    #[Pure] public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    public function Speed(): array
    {
        return [$this->xSpeed,$this->ySpeed];
    }

    public function move(): MoveablePoint
    {
        echo "<br> Point was moved to: <br>";
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }

    public function __toString(): string
    {
       return "x = $this->x <br> y = $this->y <br> xSpeed = $this->xSpeed <br> ySpeed = $this->ySpeed";
    }
}