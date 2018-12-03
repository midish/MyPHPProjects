<?php

error_reporting(-1);
// FINAL METHODS AND CLASSES

class Vehicle 
{
    // Определение ФИНАЛЬНОГО МЕТОДА, то есть МЕТОДА
    // которого нельзя переопределить
    final public function test()
    {
        // test
    }
}

// Определение ФИНАЛЬНОГО КЛАССА Car
// Теперь КЛАСС Car нельзя унаследовать 
final class Car extends Vehicle
{
    // public function test()
    // {
    //     // test
    // }
}