<?php

class Bicycle
  {
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;
  

  public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function getColor(): string
{
    return $this->color;
}

public function setNbSeats(int $nbSeats): void
{
     $this->nbSeats = $nbSeats;
}

public function setNbWheels(int $nbWheels): void
{
     $this->nbWheels = $nbWheels;
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;
}

  }

class SimpsonCars 
{
    private int $nbWheels; 
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $typeEnergy;
    private int $energyLevel;

    public function __construct(string $color, int $nbWheels, string $typeEnergy) {

        $this->color=$color;
        $this->nbWheels=$nbWheels;
        $this->typeEnergy=$typeEnergy;

    }

    public function forwardCar() {
        $this->currentSpeed = 90;

    return "Go !";

    }

    public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

    public function start() {

    }

    public function getNbWheels(): int
    {
            return $this->nbWheels;
    } 

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void 
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): string 
    {
        return $this->color;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getTypeEnergy(): string
    {
        return $this->typeEnergy;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    }


?>