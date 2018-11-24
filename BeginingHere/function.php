<?php
// Можно подключать файлы таким способом
include_once 'functionSchoolerCredit.php';


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

$creditSum = 39999;
$payout = 5000;
$homoCreditTotal = homoCredit($creditSum, 1.04, 500, $payout);
$softbankTotal = softbank($creditSum, 1.03, 1000, $payout);
$strawberryBankTotal = strawberryBank($creditSum, 1.02, 7777, $payout);

echo "homoCredit: {$homoCreditTotal} руб. \n";
echo "softbank: {$softbankTotal} руб. \n";
echo "strawberryBank: {$strawberryBankTotal} руб. \n";