<?php

namespace Shape;

use JetBrains\PhpStorm\Pure;

class Triangle extends Shape
{
    public float $a;
    public float $b;
    public float $c;
    public float $math1;
    public float $math2;
    public float $math3;


    #[Pure] public function __construct(string $name, string $color, float $a, float $b, float $c)
    {
        parent::__construct($name, $color);
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->math1 = $a + $b - $c;
        $this->math2 = $a + $c - $b;
        $this->math3 = $b + $c - $a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        $this->a = $a;
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    /**
     * @param float $c
     */
    public function setC(float $c): void
    {
        $this->c = $c;
    }

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @return float
     */
    public function getC(): float
    {
        return $this->c;
    }
    public function getPerimeter(): float
    {
        return ($this->a + $this->b + $this->c);
    }

    #[Pure] public function getTriangleArea(): float
    {
        return sqrt(($this->getPerimeter()) * ($this->math1) * ($this->math2) * ($this->math3)) / 4;

    }
}