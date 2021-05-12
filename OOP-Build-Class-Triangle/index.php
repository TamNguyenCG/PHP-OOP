<?php

use Shape\Triangle;
include_once "Shape/Shape.php";
include_once "Shape/Triangle.php";

$triangle = new Triangle("Triangle","Red",10,14,15);
echo $triangle->show();
$triangle->setA(5);
$triangle->setB(6);
$triangle->setC(8);
echo "Triangle with a = ".$triangle->getA()." and b = ".$triangle->getB()." and c = ".$triangle->getC()."<br>";
echo "Triangle Perimeter is :".$triangle->getPerimeter()."<br>";
echo "Triangle Area is: ".$triangle->getTriangleArea()."<br>";



