<?php


use JetBrains\PhpStorm\Pure;

class Circle extends Shape
{
    public int|float $radius;

    #[Pure] public function __construct(string $name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): int
    {
        return pow($this->radius,2)*pi();
    }

    public function calculatePerimeter():int
    {
        return $this->radius*2*pi();
    }
}