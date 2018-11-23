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
