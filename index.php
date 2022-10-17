<?php
abstract class HighWay

{

    private array $currentVehicles;

    private int $nbLane;

    private int $maxSpeed;

    public function setCurrentVehicles(array $currentVehicles): void

{

    $this->currentVehicles = $currentVehicles;

}

 public function setNbLane(int $nbLane): void

{

    $this->nbLane = $nbLane;

}

 public function setMaxSpeed(int $maxSpeed): void

{

    $this->maxSpeed = $maxSpeed;

}

 public function getNbLane(): int

{

    return $this->nbLane;

}

 public function getMaxSpeed(): int

{

    return $this->maxSpeed;

}

abstract public function addVehicle();

}    

final class MotorWay

{
    private int $nbLane = 4;
    private int $maxSpeed = 130;
    public function addVehicle(){
        $currentVehicles=[true,false];
    }
}

final class PedestrianWay

{
    private int $nbLane = 1;
    private int $maxSpeed = 10;
    public function addVehicle(){
        $currentVehicles=[false,true];
    }
        
}

final class ResidentialWay

{
    private int $nbLane = 2;
    private int $maxSpeed = 50;
    public function addVehicle(){
        $currentVehicles=[true,true];
    }


}


class Bicycle
{

    private int $nbWheels=4;

    private int $currentSpeed =80;

    private string $color;

    private int $nbSeats;

    private bool $hasLuggageRack;
    
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



}


class Car

{

    private int $nbWheels=4;

    private int $currentSpeed =80;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel=3;

    public function __construct(string $color, int $nbSeats, string $energy)

{

$this->color = $color;

$this->nbSeats = $nbSeats;

$this->energy = $energy;
}
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

public function start(): string

{



}
public function getnbWheels():int

{

return $this->nbWheels;
}
public function getcurrentSpeed():int

{

return $this->currentSpeed;
}

public function getColor():string

{

return $this->color;
}
public function getNbSeats():string

{

return $this->nbSeats;
}

public function getEnergy():string

{

return $this->energy;
}

public function getEnergyLevel():int

{

return $this->EnergyLevel;
}

}


