<?php

error_reporting(-1);

$marks = array();
$mark = []; // в PHP5.4 и новее эта и верхняя запись идентичны
$weather = array(4, -12, 3, 8);

$user = array(
    'name' => 'anonymous',
    'email' => 'dobrokun@gmail.com',
    'postCount' => 154
);

$users = array(
    'user1' => array(
        'name' => 'anonymous',
        'email' => 'dobrokun@gmail.com'
    ),
    'user2' => array(
        'name' => 'kek',
        'email' => 'kekkun@gmail.com'
    )
);

var_dump($weather); // отображает эл-ты массива
var_dump($user);

echo "Weather: 1st day {$weather[0]}C, 2nd day {$weather[1]}C\n";
echo "User data: name={$user['name']}, email={$user['email']}\n";

$marks['math'] = 5;
$marks['literature'] = 4;
$marks['physics'] = 2;
unset($marks['physics']); // удаляет данные из ячейки массива

var_dump($marks);

$numberOfDays = count($weather); // считает кол-во эл-ов в массиве
echo "Total {$numberOfDays} ellements\n"; // отображает кол-во эл-ов в массиве

$games = array(
    1995 => 'My born date',
    2002 => 'Warcraft 3 released',
    2007 => 'Team Fortress 2 released',
    2016 => 'Overwath released'
);

foreach ($games as $year => $event)
{
    echo "Year {$year}: {$event}\n";
}