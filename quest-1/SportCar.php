<?php

class SportCar extends Vehicle
{

    public function __construct($speed) {
        $this->speed = $speed;
        $this->name = 'Sport-car';
    }

}