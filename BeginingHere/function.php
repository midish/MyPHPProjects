<?php

function printBalance($balanceUSD)
{
    $exchangeRate = 65;
    $balanceRUR = $balanceUSD * $exchangeRate;

    echo "У вас {$balanceUSD} долл., что составляет {$balanceRUR} рублей\n";
}

printBalance(1000);
printBalance(500);

function getBalanceInFuture($deposit, $percent, $years)
{
    for ($i = 0; $i < $years; $i++)
    {
        $deposit = $deposit * $percent;
    }
    
    return $deposit;
}

$balance = getBalanceInFuture(10000, 1.05, 7);
echo "Через 7 лет у нас будет {$balance} руб. на счету\n";