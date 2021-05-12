<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle1("Ball",5);
echo "Circle Name is: ".$circle->getName()."<br>";
echo "Radius is: ".$circle->getRadius()."<br>";
echo "Area is: ".round($circle->calculateCircleArea())."<br>";
echo "Perimeter is: ".round($circle->calculateCircePerimeter())."<hr>";


$cylinder = new Cylinder1("Box",8,15);
$cylinder->setName("MiniBox");
echo "Cylinder Name is: ".$cylinder->getName()."<br>";
echo "Radius is: ".$cylinder->getRadius()."<br>";
echo "Height is: ".$cylinder->getHeight()."<br>";
echo "Area is: ".round($cylinder->calculateCylinderArea())."<br>";
echo "Volume is: ".round($cylinder->calculateCylinderVolume())."<hr>";
