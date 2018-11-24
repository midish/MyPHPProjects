<?php

error_reporting(-1);
mb_internal_encoding("utf-8");

// Регулярное выражение
$regexp = "/к.т/ui";
$lines = [
    'рыжий кот',
    'рыжий крот',
    'скиталец'
];

// Для каждого $lines применить изменения в $line
foreach ($lines as $line)
{
    echo "String: $line\n";
    // preg_match сохраняет найденные совпадения в $match
    $match = [];
    if (preg_match($regexp, $line, $match) > 0)
    {
        echo "+ Найдено слово '{$match[0]}'\n";
    }
    else
    {
        echo "- Ничего не найдено\n";
    }
}

// Пример поиска телефонных номеров (любые 7 цифр после 8911)
$phoneNumbers = "/8911[0 - 9]{7}/i";

$inputData = '0123';
// любые цифры от 0 до 9 - [0-9] стоящие отдельно ^...$ подряд в четвером {4} 
$regexp1 = '/^[0-9]{4}$/';
if (preg_match($regexp1, $inputData)) 
{
    echo "All right\n";
}
else
{
    echo "Please input number from 0000 to 9999";
}