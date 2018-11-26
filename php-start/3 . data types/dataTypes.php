<?php

error_reporting(-1);

//  Task 1

$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;

echo gettype($a)."\n";
echo gettype($b)."\n";
echo gettype($c)."\n";
echo gettype($d)."\n";
echo gettype($e)."\n";
echo gettype($f)."\n";
echo gettype($g)."\n";

//  Task 2

$one = 5;
$two = 10;
echo "$one of $two right answers\n";
echo $one.' of '.$two.' right answers'."\n";

//  Task 3
$str1 = "Good morning";
$str2 = "ladys";
$str3 = "and gentelments";
echo $str1.", ".$str2." ".$str3."\n";

//  Task 4
$array1 = array('a', 'b', 'c', 'd', 'e');
$array2 = array(1, 2, 3, 4 ,5); 

$array1['element'] = 42;
unset($array2[0]);
echo "$array1[2] \n";
echo "$array2[2] \n";
print_r($array1);
print_r($array2);
echo count($array1)." ".count($array2)."\n";