<?php

error_reporting(-1);

$daysPassed = 7;
$firstName = "Иван";
echo "В неделе $daysPassed дней! Сказал $firstName.\n";

$dollars = 200;
$exchangeRate = 65.24;
$roubles = $dollars * $exchangeRate;
echo "$dollars dollars can exchange on the $roubles roubles\n";

$a = 25;
$b = sqrt($a);
echo "Корень из $a = $b\n";

echo "Brosaem kybik...\n";
$random = mt_rand(5, 8);
echo "Vipalo $random\n";

var_dump($random);
var_dump($firstName);

?>