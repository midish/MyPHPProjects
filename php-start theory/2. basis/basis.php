<?php

error_reporting(-1);

//  Task 1

// Андрей

/*
    27 ноября 2018
*/

echo "Hello World!\n";

//  Task 2

$tvChannelName;
$addressProducer;
$carColour;
$temperatureOfWater;
$phoneModel;

//  Task 3

$x = 3;
$y = 5;
$z = 8;

echo $x, $y, $z."\n";

$sum = $x + $y + $z;

echo $sum."\n";

$result = 2 + 6 + 2/5 - 1;
echo $result."\n";

//  Task 4

$a = 1;
$b = 2;
$c;
$d;

echo $a, $b."\n";
$c = $a;
$d = $b;
echo $c, $d."\n";
$a = 3;
$b = 4;
echo $a, $b, $c, $d."\n";

//  Task 5

define('CONST1', 41);
define('CONST2', 33);

$sumOfConst = CONST1 + CONST2;
echo $sumOfConst."\n";
//CONST1 = 66; 
/*PHP Parse error:  syntax error, unexpected '=' 
in /home/midish/Desktop/MyPHPProjects/php-start/2. 
basis/basis.php on line 60 */