<?php


use JetBrains\PhpStorm\Pure;

class Rectangle2 extends Shape
{
    public int|float $width;
    public int|float $height;
    
    #[Pure] public function __construct(string $name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter(): int
    {
        return ($this->width + $this->height)*2;
    }
}