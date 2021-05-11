<?php


use JetBrains\PhpStorm\Pure;

class Cylinder extends Circle
{
    public int|float $height;
    
    #[Pure] public function __construct(string $name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    #[Pure] public function calculateArea() :int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    #[Pure] public function CalculateVolumes():int
    {
        return parent::calculateArea()*$this->height;
    }
}