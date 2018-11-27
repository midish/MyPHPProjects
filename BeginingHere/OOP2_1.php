<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

class Employee
{
    public $name;               // имя-фамилия
    public $rate;               // часовая ставка (сколько он получает тугриков за час работы)
    public $hours = array();    // массив, содержащий отработанные часы по неделям

    // Волшебный метод
    // При объявление объекта нужно будет передать в скобках переменные
    public function __construct($name, $rate)
    {
        // задаем имя и часовую ставку
        $this->name = $name;
        $this->rate = $rate;
    }

    // Считает общее кол-во отработанных часов
    public function getTotalHoursWorked()
    {
        // $this это псевдопеременная, она будет заменена на имя объекта при вызове
        return array_sum($this->hours);
    }

    // Считает зарплату
    public function getSalary()
    {
        // Получаем число отработанных часов
        $hours = $this->getTotalHoursWorked();
        // Умнажаем на часовую ставку
        $salary = $hours * $this->rate;
        
        return $salary;
    }
}

$ivan = new Employee("Иванов Иван", 10);
// name и rate заданы через конструктор, потому осталось лишь написать часы
$ivan->hours = array(40, 40, 40, 40);   // Иван работает по 40 часов в неделю

$peter = new Employee("Петров Петр", 8);
$peter->hours = array(40, 10, 40, 50);

$employees = array($ivan, $peter);

foreach ($employees as $employee) {
    echo "Имя: {$employee->name}\n";
    echo "Ставка, тугриков в час: {$employee->rate}\n";
    echo "Отработал, часов: {$employee->getTotalHoursWorked()}\n";
    echo "Заработал, тугриков: {$employee->getSalary()}\n\n";
}

// Ширина колонок
$col1 = 30;
$col2 = 8;
$col3 = 8;
$col4 = 8;

// Заголовок таблицы
echo padRight("Сотрудник", $col1) .
     padLeft("Часы", $col2) . 
     padLeft("Ставка", $col3) . 
     padLeft("З/п", $col4) . "\n\n";

// Сама таблица
foreach ($employees as $employee) {
    echo padRight($employee->name, $col1) .
         padLeft($employee->getTotalHoursWorked(), $col2) . 
         padLeft($employee->rate, $col3) . 
         padLeft($employee->getSalary(), $col4) . "\n";
}