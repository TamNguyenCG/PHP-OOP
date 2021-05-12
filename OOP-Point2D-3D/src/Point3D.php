<?php
namespace src;

use JetBrains\PhpStorm\Pure;

class Point3D extends Point2D
{
    public float $z;
    public array $arr_xyz;
    #[Pure] public function __construct(float $x, float $y,float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ(float $z): void
    {
        $this->z = $z;
    }

    public function getXYZ(): array
    {
        $this->arr_xyz = [$this->x,$this->y,$this->z];
        return $this->arr_xyz;
    }


    public function toString(): string
    {
        return "x = ".$this->x."<br>"."y = ".$this->y."<br>"."z = ".$this->z;
    }
}
