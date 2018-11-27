<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

class Employee
{
    public $name;
    public $rate;
    public $hours = array();

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

$ivan = new Employee;
$ivan->name = "Иванов Иван";
$ivan->rate = 10;    // Иван работает за 10 тугриков в час
$ivan->hours = array(40, 40, 40, 40);   // Иван работает по 40 часов в неделю

$peter = new Employee;
$peter->name = "Петров Петр";
$peter->rate = 8;
$peter->hours = array(40, 10, 40, 50);  // Петр взял отгул и потому отработал меньше часов, 
                                        // но в  последнюю неделю решил поработать побольше
$employees = array($ivan, $peter);

foreach ($employees as $employee) {
    echo "Имя: {$employee->name}\n";
    echo "Ставка, тугриков в час: {$employee->rate}\n";
    echo "Отработал, часов: {$employee->getTotalHoursWorked()}\n";
    echo "Заработал, тугриков: {$employee->getSalary()}\n\n";
}