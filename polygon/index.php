<?php

require __DIR__.'/vendor/autoload.php';

use App\Rectangle;
use App\Square;

$rect = new Rectangle();
$rect->setHeight(5);
$rect->setWidth(10);
echo $rect->getArea();

echo "<br>";

$square = new Square();
$square->setHeight(5);
echo $square->getArea();

echo "<br>";

$rect2 = new Square();
$rect2->setHeight(5);
$rect2->setWidth(10);
echo $rect2->getArea();