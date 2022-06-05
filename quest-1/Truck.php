<?php

class Truck extends Vehicle
{
    public function __construct($speed) {
        $this->speed = $speed;
        $this->name = 'Truck';
    }
}