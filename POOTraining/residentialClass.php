<?php

require_once ('highWay.php');

final class residentialWay extends highWay 
{
    public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed) {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
   }
   
   public function addVehicle ($vehicle) {  
   array_push($this->currentVehicles, $vehicle);
   }
}