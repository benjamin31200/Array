<?php

require_once ('highWay.php');

final class PedestrianWay extends highWay 
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
   }

   public function addVehicle ($vehicle) {
      if ($vehicle instanceof $this->pedestrianWay === "bike" || "skateboard") {
       array_push($this->currentVehicles, $vehicle);
   } else {
    echo "you are not authorized";
}

}

}