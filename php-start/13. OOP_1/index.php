<?php

// Это класс
// Класс может обладать СВОЙСТВАМИ и МЕТОДАМИ
class Car 
{
    // Это СВОЙСТВА класса
    public $color = 'White';
    public $speed;
    public $fuel;
    public $brand;

    // Это МЕТОД
    public function test()
    {
        echo '<br>test function';
    }

    public function tripTime($distance)
    {
        // $this - псевдопеременная, явлется ССЫЛКОЙ на объект, 
        // который вызывает этот метод
        $time = $distance / $this->speed;
        return $time;
    }

    // Соединение с БД автоматом при помощи конструктора
    // Конструктор это метод который вызывается при создании объекта
    public function __testConstruct()
    {
        // Псевдоконстанты __CLASS__ и __METHOD__ передают текущее название КЛАССА И МЕТОДА 
        echo '<br>New object of class '.__CLASS__.' created';
        echo '<br>Method '.__METHOD__.' called';
    }

    // Деструктор работает так же как конструктор и вызывается автоматически
    // при уничтожении ОБЪЕКТА
    // С помощью функции unset(); можно удалить ОБЪЕКТ
    public function __testDestruct()
    {
        echo '<br>Method '.__METHOD__.' called';
        echo '<br>object deleted';
    }
                                // Значения по умолчанию
    public function __construct($brand = 'Name', $speed = 100, $fuel = 15, $color = 'White')
    {
        $this->brand = $brand;
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->color = $color;
    }
}

// Это ОБЪЕКТЫ, экземпляры класса Car
$car1 = new Car('Audi', 110, 12, 'Yellow');
// // Задать СВОЙСТВА можно оператором ->
// $car1->brand = 'Audi';
// $car1->speed = 110;
// $car1->fuel = 12;

$car2 = new Car;
$car2->brand = 'Porshe';
$car2->speed = 150;
$car2->fuel = 15;
$car2->color = 'Black';

$car3 = new Car('BMW', 200, 10, 'Blue');

echo '<pre>';
print_r($car1);
print_r($car2);
print_r($car3);

// Вызов СВОЙСТВА
echo $car2->brand;

// Вызов МЕТОДА, МЕТОД вызывается из контекста ОБЪЕКТА
$car1->test();
echo '<br>Car 1 time: '.$car1->tripTime(1000);
echo '<br>Car 2 time: '.$car2->tripTime(1000);
echo '<br>Car 3 time: '.$car3->tripTime(1000);
$car4 = new Car();
print_r($car4);
echo '<br>Car 4 time: '.$car4->tripTime(1000);
