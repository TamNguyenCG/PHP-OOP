<?php


class Fan
{
    private int $speed;
    private bool $ON;
    private float $radius;
    private string $color;

    public function __construct()
    {
        $this->speed = 1;
        $this->ON = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }


    public function setON(bool $ON): void
    {
        $this->ON = $ON;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }


    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    public function getRadius(): float|int
    {
        return $this->radius;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->ON == true) {
            echo "Fan is ON <br>";
        } else {
            echo "Fan is OFF <br>";
        }
        echo "Speed is: ".$this->getSpeed()."<br>";
        echo "Radius is: ".$this->getRadius()."<br>";
        echo "Color is: ".$this->getColor()."<br> <hr>";
    }
}