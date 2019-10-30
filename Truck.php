<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $stockCapacity;

    /**
     * @var int
     */
    private $loadingLevel = 0;

    /**
     * @var int
     */
    private $energyLevel;

    //METHODS


    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStockCapacity($stockCapacity);
    }

    // Set & Get Energy Level
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    // Set & Get Loading Level
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity= $stockCapacity;
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
}
