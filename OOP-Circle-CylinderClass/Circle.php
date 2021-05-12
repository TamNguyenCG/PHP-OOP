<?php


class Circle1
{
    public string $name;
    public int|float $radius;

    public function __construct(string $name, int $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->name && $this->radius;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    public function calculateCircleArea(): int|float
    {
        return pow($this->radius,2) * pi();
    }

    public function calculateCircePerimeter(): int|float
    {
        return 2*$this->radius*pi();
    }
}