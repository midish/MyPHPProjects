<?php

error_reporting(-1);

//  Task 1

$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);

function totalRes ($array)
{
    $totalSum = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        $totalSum = $totalSum + ($array[$i]['price'] * $array[$i]['quantity']);        
    }
    $totalQuantity = 0;
    for ($j = 0; $j < count($array); $j++)
    {
        $totalQuantity = $totalQuantity + $array[$j]['quantity'];
    }
    $totalArray = array('sum' => $totalSum, 'quantity' => $totalQuantity);
    return $totalArray;
}

$final = totalRes($products);
print_r($final);

//  Task 2

$a = 3;
$b = 6;
$c = 3;

function squreRoot ($a, $b, $c)
{
    $D = pow($b, 2) - 4 * $a * $c;

    if ($D > 0)
    {
        $x1 = (-$b + sqrt($D)) / (2 * $a);
        $x2 = (-$b - sqrt($D)) / (2 * $a);
        $arrayRes = array('x1' => $x1, 'x2' => $x2);
        return $arrayRes;
    }
    elseif ($D == 0)
    {
        $x = -$b / (2 * $a);
        return $x;
    }
    else
    {
        return false;
    }
}

$resOfSqrtRoot = squreRoot($a, $b, $c);
print_r($resOfSqrtRoot);

//  Task 3 and 4

$digits = array(1, -2, 3, 4, -5);
$digits2 = array(1, -2, 3, 4, -5, -10000, 3434, 4343, -991);

function myDeleteNegatives($arraysOfDigit)
{
    for ($i = 0; $i <= count($arraysOfDigit); $i++)
    {
        if ($arraysOfDigit[$i] < 0)
        {
            unset($arraysOfDigit[$i]);
        }
    }
    return $arraysOfDigit;
}

// Функция принимает указатель на массив
function deleteNegatives(&$arr)
{
    foreach ($arr as $key => $value)
    {
        if ($value < 0)
        {
            unset($arr[$key]);
        }
    }
    return $arr;
}

$myDigits = myDeleteNegatives($digits);
print_r($myDigits);
deleteNegatives($digits2);
print_r($digits2);