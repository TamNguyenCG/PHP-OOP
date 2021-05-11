<?php


use JetBrains\PhpStorm\Pure;

class Square extends Rectangle2
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

}