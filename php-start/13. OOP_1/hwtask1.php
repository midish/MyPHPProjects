<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

class Car
{
    // Объявляю СВОЙСТВА КЛАССА Car
    public $speed;
    public $fuel;
    public $brand;
    public $doors = 4;
    public $price;
    public $color;

    // Объявляю КОНСТАНТЫ КЛАССА Car
    const const1 = 244;
    const const2 = 54;
    const const3 = 12;

    // Объявляю КОНСТРУТОР КЛАССА Car
    public function __construct($speed = 100, $fuel = 12, $brand = 'BWM', $doors = 4, $price = 9000, $color = 'Red')
    {
        $this->price = $price;
        $this->color = $color;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->brand = $brand;
        $this->doors = $doors;
    }

    // Объявляю МЕТОД КЛАССА Car который считает затраченное топливо
    public function fuelСonsumption($distance)
    {
        $quantity = $this->fuel * ($distance / 100);
        return $quantity;
    }

    // Статик МЕТОД находит макс константу
    public static function getMaxConst()
    {
        // if ($var1 > $var2 && $var1 > $var3)
        // {
        //     return $var1;
        // }
        // elseif ($var2 > $var1 && $var2 > $var3)
        // {
        //     return $var2;
        // }
        // else
        // {
        //     return $var3;
        // }
        return max(self::const1, self::const2, self::const3);
    }
}

$car1 = new Car;
$car2 = new Car;
$car3 = new Car;
$car4 = new Car;

$car1->price = 10000;
$car2->price = 15000;

echo '<pre>';
print_r($car1);
print_r($car2);
print_r($car3);
print_r($car4);

echo Car::const1;
echo Car::const2;
echo Car::const3;

echo '<br>Car 1 will use fuel '.$dist = $car1->fuelСonsumption(50);
// echo '<br>'.Car::getMaxConst(Car::const1, Car::const2, Car::const3);
echo '<br>'.Car::getMaxConst();