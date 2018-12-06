<?php

// ENCAPSULATION
/*
    Модификаторы доступа

    public - позволяет получать доступ к СВОЙСТВАМ и МЕТОДА 
    из любого места программы

    protected - позволяет получать доступ к ТЕКУЩЕМУ КЛАССУ
    и НАСЛЕДУЕМЫМ КЛАССАМ
    К protected можно обращаться тольок внутри УНАСЛЕДОВАННОГО КЛАССА

    private - доступ к МЕТОДАМ и СВОЙСТВАМ иммеет только КЛАСС
    в котором он объявлен 
*/
class Phone
{
    public function getNumberByName($name)
    {
        // ...
    }
    public function dialNumber()
    {
        // ...
    }
    public function call($name)
    {
        $number = $this->getNumberByName($name);
        $this->dialNumber($number);
    }
}

$phone1 = new Phone;
$phone1->call('Andrey'); 