<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

// $text = "А роза упала на лапу Азора";
$text = "AА";
$result = 'палиндром';

$lowerText = mb_strtolower($text);
$deleteSpace = str_replace(' ', '', $lowerText);
echo "{$deleteSpace}\n";

$length = mb_strlen($text);
$halfLength = floor($length / 2);

for ($i = 0; $i <= $halfLength; $i++)
{
    $left = mb_substr($deleteSpace, $i, 1);
    $right = mb_substr($deleteSpace, ($i + 1) * -1, 1);
    if ($left != $right)
    {
        $result = 'Не палиндром';
    }
}

echo "Результат: {$result}\n";