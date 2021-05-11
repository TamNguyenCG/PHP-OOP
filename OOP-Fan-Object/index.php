<?php
include_once "Fan.php";
$fan1 = new Fan();
$fan1->setON(true);
$fan1->setSpeed(3);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->toString();

$fan2 = new Fan();
$fan2->setON(false);
$fan2->toString();

