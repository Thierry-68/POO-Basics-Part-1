<?php

class Car
{
    private int $nbWheels;// nombre de roues
    private int $currentSpeed=0;// vitesse actuel
    private string $color;// couleur
    private int $nbSeats; // nbre de sièges
    private string $energy; // type d'énergie
    private int $energyLevel; // énergie actuel
    private string $name; // nom de la voiture

    // Accesseurs & Mutateurs

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function getNbSeats():int
    {
        return $this->nbSteats;
    }

    public function getName():string
    {
        return "The <span style='color:white;background-color:".$this->color.";'> ".$this->name." car ".$this->color." </span>";
    }

    public function setName(string $name):void
    {
        $this->name=$name;
    }


    // Construteur
    public function __construct(string $color,int $nbSeats, string $energy)
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->energy=$energy;
    }
 
    // Méthodes
    public function forward():string // Avancer 
    {
        if($this->getCurrentSpeed() !==0 ){
            $this->currentSpeed=15;
            return "Go !";
        }
        else{
            return "Tu as oublié de démarrer !";
        }        
    }
 
    public function brake():string // Avancer
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start():string // Démarrer
    {
        if($this->currentSpeed === 0){
            $this->currentSpeed=1;
            return "On démarre !";
        }
        return "C'est déjà fait ! Speed is ".$this->currentSpeed; 
    }

}