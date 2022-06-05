<?php

class Bike extends Vehicle
{
    public function __construct($speed) {
        $this->speed = $speed;
        $this->name = 'Bike';
    }
}