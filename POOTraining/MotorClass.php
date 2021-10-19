<?php

require_once ('highWay.php');
require_once ('index.php');

final class MotorWay extends highWay 
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
   }

   public function addVehicle ($vehicle) {  
    if ($vehicle instanceof $this->MotorWay === "car") {
        array_push($this->currentVehicles, $vehicle);
    } else {
        echo "you are not authorized";
    }
}

}
