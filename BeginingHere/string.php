// sudo apt-get install php-mbstring 

<?php

error_reporting(-1);

$op = "Good fellow"; // var op stores string

$money = 300;
$text = "You have {$money} roubles for lunch\n";
echo $text;

// У строк в двойных кавычках больше возможностей для подстановки

// Строки можно конкатинироватьс помощь ТОЧКИ
$word1 = "OP";
$word2 = "good person";
$op = $word1 . "-" . $word2;
echo $op;

// Можно сделать замену текста в строках с помощью str_replace()
$text = "Dog is a friend of people\n";
$text = str_replace("Dog", "Cat", $text);
echo $text;

// Можно сделать продвинутую замену текста с помощью массива
$text = "Нас сдали. Явка провалена";
$codeTable = array(
    'а' => 'z',
    'б' => 'y',
    'в' => 'x'
);
$cipher = strtr($text, $codeTable);
echo "Было: {$text}, стало {$cipher}\n";
