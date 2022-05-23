<?php

/**
 * Program for Proxy design pattern
 */
interface Car{
    function drive();
}
class Drive implements Car {

    private $carName;
    public function __construct($carName)
    {
        $this->carName = $carName;
    }
    public function drive()
    {
       echo "I am Driving ".$this->carName." on highway \n";
    }
    
}
class DriveProxy implements Car {
    private $car;
    private $carName;
    public function __construct($car)
    {
        $this->carName = $car;
    }
    public function drive()
    {
        if($this->car == null){
            $this->car = new Drive($this->carName);
        }
        $this->car->drive();

    }
}
$obj = new DriveProxy("Audi");
$obj->drive();
?>