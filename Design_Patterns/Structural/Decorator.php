<?php
interface Bike
{
    public function cost();
}

class Shine implements Bike
{
    public function cost()
    {
        return 60000;
    }
}
class Unicorn implements Bike
{
    private $item;
    public function __construct(Bike $item)
    {
        $this->item = $item;
    }
    public function cost()
    {
        return $this->item->cost() + 25000;
    }
}

class Combo implements Bike
{
    private $item;
    public function __construct(Bike $item)
    {
        $this->item = $item;
    }
    public function cost()
    {
        return $this->item->cost() + 70000;
    }
}
$shine = new Shine();
$unicorn = new Unicorn($shine);
$combo = new Combo($shine);

echo "Shine cost is " . $shine->cost();
echo "\nUnicorn cost is " . $unicorn->cost();
echo "\nCombo cost is " . $combo->Cost();
?>