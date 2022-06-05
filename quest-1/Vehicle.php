<?php

class Vehicle
{

    protected $speed;
    protected $name;

    /**
     * @return mixed
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }




}