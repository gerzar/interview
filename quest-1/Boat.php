<?php

class Boat extends Vehicle
{
    /**
     * @var float
     */
    protected $extraTime;

    public function __construct($speed) {
        $this->speed = $speed;
        $this->name = 'Boat';
        $this->extraTime = 0.25;
    }

    /**
     * @return float
     */
    public function getExtraTime(): float
    {
        return $this->extraTime;
    }


}