<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

$array = array(
    "Avtotehnika" => array( // 1
        "Velo" => array( // 2
            "Velosipedi" => array( // 3
                "(tovar) Extreme" => 10, // 4
                "(tovar) Author" => 4 // 4
            ),
            "Samokati" => 12, // 3
        ),
        "Avto" => array( // 2
            "Opel" => array( // 3
                "(tovar) Vivaro" => 5, // 4
            ),
            "(tovar) Honda" => 10, // 3
            "(tovar) Audi" => 11, // 3
        ),
        "(tovar) Aksessuari" => 7, // 2
    ),
    "Phototehnika" => array( // 1
        "(tovar) Photocamers" => 6, // 2
        "(tovar) Videocamers" => 3, // 2
    ),
    "(tovar) Others" => 3, // 1
);

function sumOfElements($array, $level = 0) {

    // Статичная переменная сохраняет значение при завершение ф-ции
    static $count;
    static $items;

    // Если переден массив (true)
    if (is_array($array)) {
        // Переменная $level считает уровень вложенности массива
        $level++;
        // Для всех эл-ов массива $array будет вызвана ф-ция sumOfElements
        // и записана в $element
        foreach ($array as $element) {
            sumOfElements($element, $level);
        }
    } else {
        $count++;
        $items += $array;
    }

    return array("count" => $count, "items" => $items);
}

$result = sumOfElements($array);
print_r($result);