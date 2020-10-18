<?php
class Vehicle
{
    /**
    * @var string
    */
    protected $color;

    /**
    * @var integer
    */
    protected $currentSpeed;

    /**
    * @var integer
    */
    protected $nbSeats;

    /**
    * @var integer
    */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 30;
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

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}

    
class Truck extends Vehicle
{
    /**
         * @var int
         */
        private $stock;

        public function __construct(int $stock, string $color, int $nbSeats, string $energy)
        {
            $this->stock = $stock;
            $this->color = $color;
            $this->nbSeats = $nbSeats;
            $this->energy = $energy;
        }

        public function inFilling(): string
    {
        $sentence = "";
        while ($this->stock > 0) {
            $this->stock--;
            $sentence .= "in filling !!!";
        }

        $sentence .= "Full";
        return $sentence;
    }

        public function getStock(): int
        {
            return $this->stock;
        }
    
        public function setStock(int $stock): void
        {
            if($stock >= 0){
                $this->stock = $stock;
            }
        }


        public function getEnergy(): string
        {
            return $this->energy;
        }
    
        public function setEnergy(string $energy): void
        {
            $this->energy = $energy;
        }

        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if($currentSpeed >= 0){
                $this->currentSpeed = $currentSpeed;
            }
        }
}
