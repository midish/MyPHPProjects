<?php

error_reporting(-1);

//  Task 1

$i = 1;
while ($i <= 25)
{
    echo "$i ";
    $i++;
}
echo "\n";

for ($j = 1; $j <= 25; $j++)
{
    echo "$j ";
}
echo "\n";

//  Task 2

$N = 10;

for ($x = 1; $x <= $N; $x++)
{
    echo sqrt($x)." \n";
}

//  Task 3

for ($k = 10; $k >= 1; $k--)
{
    $arr[] = "Кнопка $k";
}

natsort($arr);

echo "<ul>";
foreach ($arr as $menu)
{
    echo "<li><a href=\"#\">$menu</li>";
}
echo "</ul>";