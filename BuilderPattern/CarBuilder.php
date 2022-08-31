<?php
include('Car.php');

class CarBuilder
{
    private $brand = 'Unknown';
    private $machineCapacity = 'Unknown';
    private $machineType = 'Unknown';
    private $mileage = 0;


    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function setMachineCapacity($capacity)
    {
        $this->machineCapacity = $capacity;
        return $this;
    }

    public function setMachineType($type)
    {
        $this->machineType = $type;
        return $this;
    }

    public function setMileage($mile)
    {
        $this->mileage = $mile;
        return $this;
    }

    public function build():Car
    {
        $car = new Car($this->brand, $this->machineCapacity, $this->machineType, $this->mileage);
        return $car;
    }
}
?>