<?php

error_reporting (-1);

// for ($x = 1; $x < 10; $x++)
// {
//     echo "x = $x\n";
// }
// for ($y = 1; $y <= 9; $y++)
// {
//     $res = $y * $y;
//     echo "$y x $y = $res\n";
// }

/*
W5.2 Некто кладет в банк 10000 р. Банк начисляет 10% годовых 
(то есть, каждый год на счету становится на 10% больше, чем 
в прошлом году). Напиши программу, считающую, через сколько лет
в банке будет миллион? Сколько лет будет этому некто? Доживет 
ли некто до этого дня, если сегодня ему 16 лет?
*/

$startSum = 10000;
$startAge = 16;
$countAge = 0;

for (; $startSum < 1000000; $startSum = $startSum * 1.1)
{
    $countAge++;
}
$age = $startAge + $countAge;
echo "Прошло $countAge лет, возраст вкладчика = $age\n";

/* 
W5.1. Школьник решил купить айфон и для этой цели взял кредит.
Сумма кредита — 40000 р., банк в начале каждого месяца 
(включая первый) начисляет 3% от остатка долга за пользование 
кредитом и 1000 р. комиссии (да, а ты думал, обойдешься 
процентами?). После этого, в конце каждого месяца, наш герой 
идет в банк и пытается выплатить долг, но он не может заплатить 
более 5000 р за раз (сэкономленных на школьных завтраках). 
Вопрос, когда он избавится от долга? Во сколько школьнику 
обошелся айфон?
*/

$creditBalance = 40000; /* Долг анона перед банком */
$percent = 1.03; /* Банк начисляет 3% в месяц от суммы */
$servicePayment = 1000; /* А также 1000 рублей в месяц комиссии за обслуживание счета */
$monthlyPayment = 5000; /* Анон платит 5000 р в месяц, это все, что ему дает мама на завтраки */
$paymentTotal = 0; /* Сколько всего отдал банку анон */

/* Посчитаем расходы 20 раз на 20 месяцев вперед */
for ($month = 1; $month <= 20; $month++) {
    
    if ($creditBalance > 5000)
    {
        $creditBalance = ( $creditBalance * $percent ) + $servicePayment - $monthlyPayment;
        $paymentTotal = $paymentTotal + $monthlyPayment;
        echo "{$month} месяц спустя: долг = {$creditBalance} руб, выплачено всего {$paymentTotal} руб. \n";
    }
    elseif ($creditBalance <= 5000)
    {
        /* Если баланс отрицательный — хватит считать */
        $paymentTotal = $paymentTotal + $creditBalance;
        $creditBalance = 0;
	    echo "{$month} месяц спустя: долг = {$creditBalance} руб, выплачено всего {$paymentTotal} руб. \n";
        echo "С меня хватит!\n";
        break;  
    }
}

?>