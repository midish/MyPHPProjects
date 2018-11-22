<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

$text = "АБбвббБА";
$result = "Палиндром";

// $lowerText = mb_strtolower($text);
// $deleteSpace = str_replace(' ', '', $lowerText);
$text = mb_strtolower($text);
$length = mb_strlen($text);
$newtext = "";

for ($i = 0; $i < $length; $i++)
{
    $symbol = mb_substr($text, $i, 1);
    if ($symbol != " ")
    {
        $newtext = $newtext . $symbol;
    }
}
echo "{$newtext}\n";

$halfLength = floor($length / 2);

for ($i = 0; $i <= $halfLength; $i++)
{
    $firstSymbol = mb_substr($newtext, $i, 1);
    $secondSymbol = mb_substr($newtext, ($i + 1) * -1, 1);
    if ($firstSymbol != $secondSymbol)
    {
        $result = "Не палиндром";
        break;
    }
}

echo "Результат: {$result}\n";