<?php
class Fan
{
    private static int $speed;
    private static bool $ON;
    private static float $radius;
    private static string $color;


    public function __construct()
    {
        self::$speed = 1;
        self::$ON = false;
        self::$radius = 5;
        self::$color = "blue";
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        self::$speed  = $speed;
    }


    public function setON(bool $ON): void
    {
        self::$ON = $ON;
    }

    public function getSpeed(): int
    {
        return self::$speed ;
    }


    public function setRadius(float|int $radius): void
    {
        self::$radius= $radius;
    }

    public function getRadius(): float|int
    {
        return self::$radius;
    }

    public function setColor(string $color): void
    {
        self::$color = $color;
    }

    public function getColor(): string
    {
        return self::$color;
    }

    public function toString()
    {
        if (self::$ON == true) {
            echo "Fan is ON <br>";
        } else {
            echo "Fan is OFF <br>";
        }
        echo "Speed is: ".$this->getSpeed()."<br>";
        echo "Radius is: ".$this->getRadius()."<br>";
        echo "Color is: ".$this->getColor()."<br> <hr>";
    }
}
