<?php
// car.php
// This file contains the Car class definition

class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to return car information
    public function getInfo() {
        return "Car: $this->year $this->make $this->model";
    }
}
?>
