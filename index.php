<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('yellow');
var_dump($bike);

$car = new Car('blue',5,'gasoline');
var_dump($car);

$bike->setCurrentSpeed(0);

echo $car->start();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


$car->setCurrentSpeed(0);

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();


