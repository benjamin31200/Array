<?php

require_once ("MotorClass.php");
require_once ("residentialClass.php");
require_once ("pedestrianClass.php");

$MotorWay = new MotorWay([], 4, 130);
var_dump($MotorWay);

$PedestrianWay = new PedestrianWay([], 1, 10);
var_dump($PedestrianWay);

$ResidentialWay = new ResidentialWay([], 2, 50);
var_dump($ResidentialWay);