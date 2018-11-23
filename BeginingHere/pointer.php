<?php

error_reporting(-1);
mb_internal_encoding ('utf-8');

$alpha = 5;
$beta = 10;

function myAlphaFunc($a)
{
    $a = 5000;
}

// В ф-цию передаётся указатель на переменную
// $b имеет тот же адрес что и $beta
function myBetaFunc(&$b)
{
    $b = 10000;
}

echo $alpha."\n";
echo $beta."\n";

myAlphaFunc($alpha);
myBetaFunc($beta);

// Поэтому значение $alpha не изменилось
// А значение $beta изменилось
echo $alpha."\n";
echo $beta."\n";