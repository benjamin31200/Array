<?php


require_once 'bicycle.php';
require_once 'cars.php';
require_once 'truck.php';


// $bike = new Bicycle('blue', 1);
// echo $bike->forward();
// var_dump($bike);

// $car = new Car('green', 4, 'fuel, electric');
// echo $car->forward();
// var_dump($car);

$truckPink = new Trucks (455, 'pink', 4, 'fuel, electric, solar');
echo $truckPink->fullOrNot();
echo $truckPink->forward();
echo $truckPink->brake();
var_dump($truckPink);

$truckBlue = new Trucks (200, 'blue', 4, 'fuel');
$truckBlue->setEnergy1(5);
echo $truckBlue->fullOrNot();
echo $truckBlue->forward();
echo $truckBlue->brake();
var_dump($truckBlue);