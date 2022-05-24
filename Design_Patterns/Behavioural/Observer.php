<?php

/**
* Program for Oberver Design Pattern
*/
interface Observer
{
    public function addPrice(Price $price);
}
interface Price
{
    public function update();
    public function getPrice();
}

class PriceSimulator implements Observer
{
    private $price;

    public function __construct()
    {
        $this->price = array();
    }

    public function addPrice(Price $price)
    {
        array_push($this->price, $price);
    }

    public function updatePrice()
    {
        foreach ($this->price as $price) {
            $price->update();
        }
    }
}

class Bike implements Price
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "\nBike Original Price : $this->price";
    }

    public function update()
    {
        $this->price = $this->getPrice();
        echo "\nBike Updated Price : $this->price";
    }

    public function getPrice()
    {
        $updatedPrice = $this->price + (rand(1, 10) * 10);
        return $updatedPrice;
    }
}

class Car implements Price
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "\nCar Original Price : $this->price";
    }

    public function update()
    {
        $this->price = $this->getPrice();
        echo "\nCar Updated Price : $this->price";
    }

    public function getPrice()
    {
        $updatedPrice = $this->price + (rand(1, 10) * 10);
        return $updatedPrice;
    }
}

$priceSimulator = new PriceSimulator();

$bike = new Bike(77000);
$car = new Car(120000);

$priceSimulator->addPrice($bike);
$priceSimulator->addPrice($car);
echo "\n\nUpdating Price 1st Time ";

//calling function to update price 
$priceSimulator->updatePrice();
echo "\n\nUpdating Price 2nd Time ";
$priceSimulator->updatePrice();