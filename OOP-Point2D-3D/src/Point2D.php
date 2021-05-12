<?php
namespace src;

class Point2D
{
    public float $x;
    public float $y;
    public array $arr_xy;
    public function __construct(float $x,float $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
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

    public function getXY(): array
    {
        $this->arr_xy = [$this->x,$this->y];
        return $this->arr_xy;
    }

    public function toString(): string {
        return "x = ".$this->x."<br>"."y = ".$this->y;
    }

}