<?php

class Student
{
    public $name;
    public $result;

    // МЕТОД __construct будет ожидать массив $result
    function __construct($name, array $result)
    {
        echo '<br>Student ' . $name . ':';
        foreach ($result as $subject => $item)
        {
            echo '<br>' . $subject . ': ' . $item;
        }
        echo '<hr>';
    }
}

$student1 = new Student('John', array('math' => 3, 'biology' => 4));
$student2 = new Student('Marry', array('math' => 4, 'biology' => 4));

class User
{
    public $firstname;
    public $lastname;
}

// ф-ция getFullName принимает ОБЪЕКТ КЛАССА User
function getFullName(User $user)
{
    return $user->firstname . ' ' . $user->lastname;
}

$user1 = new User;
$user1->firstname = 'Alex';
$user1->lastname = 'Jones';

echo getFullName($user1);

function onErrorFuncton()
{
    echo 'Enter correct value';
}
// В случае ошибки будет выводится сообщение из onErrorFunction
set_error_handler('onErrorFucntion');

// АБСТРАКТНЫЙ КЛАСС это базовый КЛАСС, ОБЪЕКТЫ которого не создаются
abstract class Publication
{
    // АБСТРАКТНЫЙ МЕТОД это МЕТОД КЛАССА, реализация которого отсутствует
    // сигнатуры в наследуемых классах должны совпадать с сигнатурой АБСТРАКТНОГО
    // метода
    // Если КЛАСС содержит хотя бы один АБСТРАКТНЫЙ МЕТОД, то КЛАСС должен быть АБСТРАКТНЫМ
    abstract public function printItem();

    // ...
}

// ИНТЕРФЕЙСЫ
// Если нужно описать только работу КЛАССА потомка, то используется ИНТЕРФЕЙС
// Если еще можно реализовать общие методы, то используется АБСТРКТНЫЙ КЛАСС

interface Vehicle
{
    // МЕТОДЕ в ИНТЕРФЕЙСЫ могу быть описаны, но без реализации
    public function info();
}

// ИНТЕРФЕЙСЫ можно наследовать друг от друга
interface Car extends Vehicle
{
    public function drive();
}

interface Boat extends Vehicle
{
    public function swim();
}

// КЛАСС Audi реализует ИНТЕРФЕЙС Car
// унаследуемые МЕТОДЫ обязательно должны быть реализованы
class Audi implements Car
{
    public function info()
    {
        echo '<br>Audi is a German blablabl';
    }

    public function drive()
    {
        echo '<br>Audi drivers!';
    }
}

$audi1 = new Audi;
$audi1->info();
$audi1->drive();

// можно унаследовать сразу несколько ИНТЕРФЕЙСОВ
// множественное наследование КЛАССОВ запрещено
class MercedesAmphibious implements Car, Boat
{
    public function info()
    {
        echo '<br>Mercedes is a German blablabla';
    }

    public function drive()
    {
        echo '<br>Mercedes drivers!';
    }

    public function swim()
    {
        echo '<br>Mercedes swims!';
    }
}

$mercsedes1 = new MercedesAmphibious;
$mercsedes1->info();
$mercsedes1->drive();
$mercsedes1->swim();