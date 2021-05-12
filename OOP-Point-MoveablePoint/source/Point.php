<?php
namespace source;


class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x,float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setXY(float $x,float $y): void
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY() :array
    {
        return [$this->x,$this->y];
    }

    public function __toString(): string
    {
         return "x = $this->x <br> y = $this->y <br> ";

    }
}