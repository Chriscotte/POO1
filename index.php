<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';



$bicycle = new Bicycle('blue', 1);
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
var_dump($car);


$truck = new Truck ('red', 3, 'electric', 200);
echo $truck->forward();
echo $truck-> setStockCapacity(250);
var_dump($truck);