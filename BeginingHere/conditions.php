<?php

error_reporting(-1);

$anonDice1 = mt_rand(1, 6);
$anonDice2 = mt_rand(1, 6);

$compDice1 = mt_rand(1, 6);
$compDice2 = mt_rand(1, 6);

echo "Y anona {$anonDice1} and {$anonDice2}\nY kompa {$compDice1} and {$compDice2}\n";

$anonSum = ($anonDice1 + $anonDice2);
$compSum = ($compDice1 + $compDice2);

if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2)) 
{
    echo "2 dabla - teb9 jdet bolsh ydacha. Zaposti screen!!\n";
    exit();
}

if ($anonSum > $compSum)
{
    echo "Pobedil anon";
}
elseif ($compSum > $anonSum)
{
    echo "Pobedil comp";
}
else
{
    echo "Pobedila dryjba";
}

?>