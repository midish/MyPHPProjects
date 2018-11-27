<?php

error_reporting(-1);

//  Task 1

define('MIN', 10);
define('MAX', 50);

$x = 42;

if ($x >= MIN && $x <= MAX)
{
    echo "+\n";
}
else
{
    echo "-\n";
}

//  Task 2

$a = 600;
$b = -70;
$c = 600;

$D = pow($b, 2) - 4 * $a * $c;

if ($D > 0)
{
    $x1 = (-$b + sqrt($D)) / (2 * $a);
    $x2 = (-$b - sqrt($D)) / (2 * $a);
    
    echo "D > 0, x1 = $x1, x2 = $x2\n";
}
elseif ($D == 0)
{
    $x = -$b / (2 * $a);
    echo "D = 0, x = $x\n";
}
else
{
    echo "D < 0, root is nothing\n";
}

//  Task 3
if ($a == $b || $a == $c || $c == $b)
{
    echo "Error!\n";
}
else
{
    if ($a > $b && $a < $c || $a < $b && $a > $c)
    {
        echo "$a\n";
    }
    else
    {
        if ($b > $a && $b < $c || $b < $a && $b > $c)
        {
            echo "$b\n";
        }
        else
        {
            echo "$c\n";
        }
    }
}