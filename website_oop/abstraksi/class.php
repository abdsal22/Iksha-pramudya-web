<?php
abstract class Vehicle {
    abstract public function startEngine();
    
    public function describe() {
        return "Ini adalah sebuah kendaraan.";
    }
}

class Car extends Vehicle {
    private $make;
    private $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function startEngine() {
        return "Mesin dari {$this->make} {$this->model} di nyalakan";
    }

    public function getDetails() {
        return "Ini adalah mobil {$this->make} {$this->model}.";
    }
}
?>
