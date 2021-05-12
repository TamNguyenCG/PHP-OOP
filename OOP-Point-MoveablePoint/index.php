<?php

use source\Point;
use source\MoveablePoint;
include_once "vendor/autoload.php";

$point = new Point(10,10);
echo $point;
$point->setXY(20,20);
echo "<pre>";
print_r($point->getXY());
echo "</pre>";

$movealbePoint = new MoveablePoint($point->x,$point->y,5,5);
echo $movealbePoint."<br>";
echo $movealbePoint->move();
echo $movealbePoint->move();


