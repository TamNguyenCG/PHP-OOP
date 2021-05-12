<?php


namespace Shape;


class Shape
{
    public string $name;
    public string $color;
    public function __construct(string $name,string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function show(): string
    {
        return "This is: ".$this->name." and Color is: ".$this->color."<br>";
    }
}