<?php

require_once ("pedestrianClass.php");
require_once ("MotorClass.php");

abstract class highWay 
{
protected array $currentVehicles;
protected int $nbLane;
protected int $maxSpeed;

abstract protected function addVehicle ($vehicle);

public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed) {
     $this->currentVehicles = $currentVehicles;
     $this->nbLane = $nbLane;
     $this->maxSpeed = $maxSpeed;
}



public function getCurrentVehicles(): array
{
    return $this->currentVehicles;
}

public function setCurrentVehicles(array $currentVehicles): void
{
   $this->currentVehicles = $currentVehicles;
}

public function getNbLane(): int
{
    return $this->nbLane;
}

public function setNblane(int $nbLane): void
{
   $this->nbLane = $nbLane;
}

public function getmaxSpeed(): int
{
    return $this->maxSpeedS;
}

public function setMaxSpeed(int $maxSpeed): void
{
   $this->maxSpeed = $maxSpeed;
}

}