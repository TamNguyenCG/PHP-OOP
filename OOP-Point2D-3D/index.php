<?php
use src\Point2D;
use src\Point3D;
include_once "vendor/autoload.php";


$point2d = new Point2D(12,20);

$point2d->setX(15);
$point2d->setY(30);
echo $point2d->toString()."<br>";
echo "<pre>";
print_r($point2d->getXY());
echo "</pre>";
$point3d = new Point3D(12,29,40);
$point3d->setX(15);
$point3d->setY(30);
$point3d->setZ(40);

echo $point3d->toString()."<br>";
echo "<pre>";
print_r($point3d->getXYZ());
echo "</pre>";