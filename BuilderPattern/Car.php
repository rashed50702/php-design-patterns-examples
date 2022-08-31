<?php
class Car
{
    private $brand;
    private $machineCapacity;
    private $machineType;
    private $mileage;

    public function __construct($brand, $machineCapacity, $machineType, $mileage)
    {
        $this->brand = $brand;
        $this->machineCapacity = $machineCapacity;
        $this->machineType = $machineType;
        $this->mileage = $mileage;        
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getMachineCapacity()
    {
        return $this->machineCapacity;
    }

    public function getMachineType()
    {
        return $this->machineType;
    }

    public function getMileAge()
    {
        return $this->mileage;
    }

    public function setBrand($brand)
    {
        if($brand !== null)
        {
            $this->brand = $brand;
            return "Brand saved successfully!";
        }else{
            return "You need to enter the brand name";
        }
    }

    public function setMileage($mileage)
    {
        $this->mileage += $mileage;
    }

}

?>