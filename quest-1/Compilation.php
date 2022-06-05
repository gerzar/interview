<?php

include 'Vehicle.php';
include 'SportCar.php';
include 'Truck.php';
include 'Bike.php';
include 'Boat.php';


class Compilation
{
    public $distance;
    public $objects;

    public function __construct()
    {
        $this->distance = 350;

        $this->objects = [
            new SportCar(150),
            new Truck(60),
            new Bike(100),
            new Boat(50)
        ];

    }

    /**
     * @param object $object
     * @param float $extraTime
     * @return float|int
     */
    public function calculate(object $object, float $extraTime = 0)
    {
        return $this->distance/$object->getSpeed() + $extraTime;

    }

    public function show(): string
    {
        $result = '';
        foreach($this->objects as $object){
            $extraTime = ((method_exists($object, 'getExtraTime')) ? $object->getExtraTime() : 0);
            $result .= $object->getName() . ': '. $this->calculate($object, $extraTime). '<br>';
        }
        return $result;
    }

}