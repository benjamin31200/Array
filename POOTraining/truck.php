<?php 

require_once 'POO2.php';

class Trucks extends Vehicle
{
    
    private int $storageCapacity;

    private int $loading = 0;

    private string $energy;
    
    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        Vehicle::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function fullOrNot(): string
    {
        
        
            $fullOrNot = "";
            
            while ($this->loading >= 0 && $this->loading < 10) {
                $this->loading++;
                $fullOrNot .= "Im on loading";
            }
    
            $fullOrNot .= "I'm full, lets go";
            return $fullOrNot;
        
            
        
    }

    
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        if($loading >= 0){
            $this->loading = $loading;
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }

    public function setEnergy1(int $loading): void
    {
        
        $this->loading = $loading;
    }


}

?>