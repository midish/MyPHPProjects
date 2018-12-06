<?php

require_once 'data.php';

foreach ($publications as $item)
{
    //echo '<pre>';
    // С помощью ф-ции get_class можно узнать к какому КЛАССУ 
    // принадлежит ОБЪЕКТ
    // echo 'В переменной $item находится объект класса '.get_class($item);
    // print_r($item->printItem());
    $item->printItem();
    //echo '</pre>';
}