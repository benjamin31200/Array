<?php

require_once 'Bicycle.php';

$bike = new Bicycle();
$bike->setColor('blue');
$bike->setCurrentSpeed(15);
$bike->setNbSeats(2);
$bike->setNbWheels(1);

$rockrider = new Bicycle();
$rockrider->setColor('yellow');
$rockrider->setCurrentSpeed(15);
$rockrider->setNbSeats(2);
$rockrider->setNbWheels(1);

$tornado = new Bicycle();
$tornado->setColor('black');
$tornado->setCurrentSpeed(15);
$tornado->setNbSeats(2);
$tornado->setNbWheels(1);

$carHomer = new SimpsonCars('yellow', 3, 'diesel');
$carHomer->setCurrentSpeed(90);
$carHomer->setNbSeats(4);
$carHomer->setEnergyLevel(20);

var_dump($carHomer);

$carKrusty = new SimpsonCars('grey', 2, 'solar');
$carKrusty->setCurrentSpeed(90);
$carKrusty->setNbSeats(4);
$carKrusty->setEnergyLevel(0);

var_dump($carKrusty);




echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo $carKrusty->forwardCar();
echo '<br> Vitesse de la voiture : ' . $carKrusty->getCurrentSpeed() . ' km/h' . '<br>';
echo $carKrusty->brake();
echo '<br> Vitesse de la voiture : ' . $carKrusty->getCurrentSpeed() . ' km/h' . '<br>';
echo $carKrusty->brake();


?>