<?php

include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle2.php";
include_once "Square.php";

$circle = new Circle("Circle",5);
echo "Circle Area is: ".$circle->calculateArea()."<br>";
echo "Circle Perimeter is: ".$circle->calculatePerimeter()."<hr>";

$cylinder = new Cylinder("Cylinder",5,8);
echo "Cylinder Area is: ".$cylinder->calculateArea()."<br>";
echo "Cylinder Perimeter is: ".$cylinder->calculatePerimeter()."<hr>";

$rectangle = new Rectangle2("Rectangle",7,4);
echo "Rectangle Area is: ".$rectangle->calculateArea()."<br>";
echo "Rectangle Perimeter is: ".$rectangle->calculatePerimeter()."<hr>";

$square = new Square("Square",7);
echo "Square Area is: ".$square->calculateArea()."<br>";
echo "Square Perimeter is: ".$square->calculatePerimeter()."<hr>";