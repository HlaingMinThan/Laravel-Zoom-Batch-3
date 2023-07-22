<?php

class Car
{
    public $name; //Lexus
    protected $wheels; //4

    public function __construct($name, $wheels)
    {
        $this->name = $name;
        $this->wheels = $wheels;
    }
    //getter
    private function getWheels()
    {
        return $this->wheels;
    }

    //setter
    public function setWheels($count)
    {
        if ($count % 2 === 0) {
            $this->wheels = $count;
        } else {
            echo 'we cannot accept';
        }
    }

    public function drive()
    {
        echo $this->name . " is driving with " . $this->getWheels() . " wheels";
    }

    public function stop()
    {
        echo $this->name . " is stop";
    }
}

//inheritence
class Truck extends Car
{
    public function carryLoad()
    {
        echo $this->name . " is carrying load with " . $this->wheels . " wheels";
    }

    public static function anotherOne()
    {
        echo 'another one is running';
    }

    public static function quickDrive($name, $wheels)
    {
        echo static::anotherOne();
    }
}

Truck::quickDrive('truckname', 10);
