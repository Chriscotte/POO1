<?php


class Car
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var string
     */
    private $energyLevel;

    //METHODS
    public function __construct($color, $nbSeats, $energy)
    {
        $this->setColor($color);
        $this->setNbSeats($nbSeats);
        $this->setEnergy($energy);
    }

    public function forward()
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
        $sentence = "";
        while ($this->currentSpeed = 0) {
            $this->currentSpeed++;
            $sentence .= "START !!!";
        }
        $sentence .= "I'm gone !";
        return $sentence;
    }

    //GETTERS & SETTERS
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }

    /**
     * @param int $nbSeats
     * @return void
     */
    public function setNbSeats(int $nbSeats): void
    {
            $this->nbSeats = $nbSeats;
        }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }

}