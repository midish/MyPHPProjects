<?php

error_reporting(-1);

function homoCredit($creditSum, $percent, $commission, $payout)
{
    $totalPayout = 0;
    for ($month = 1; $creditSum > 0; $month++)
    {
        $creditSum = ($creditSum * $percent) + $commission - $payout;
        if ($creditSum < 5000)
        {
            $totalPayout += $creditSum;
            $creditSum = 0;
        }
        else
        {
            $totalPayout += 5000;
        }
    }
    return $totalPayout;
}

function softbank($creditSum, $percent, $commission, $payout)
{
    $totalPayout = 0;
    for ($month = 1; $creditSum > 0; $month++)
    {
        $creditSum = ($creditSum * $percent) + $commission - $payout;
        if ($creditSum < 5000)
        {
            $totalPayout += $creditSum;
            $creditSum = 0;
        }
        else
        {
            $totalPayout += 5000;
        }
    }
    return $totalPayout;
}

function strawberryBank($creditSum, $percent, $openCommission ,$payout)
{
    $totalPayout = 0;
    $creditSum += $openCommission;
    for ($month = 1; $creditSum > 0; $month++)
    {
        $creditSum = ($creditSum * $percent) - $payout;
        if ($creditSum < 5000)
        {
            $totalPayout += $creditSum;
            $creditSum = 0;
        }
        else
        {
            $totalPayout += 5000;
        }
    }    
    return $totalPayout;
}

$creditSum = 39999;
$payout = 5000;
$homoCreditTotal = homoCredit($creditSum, 1.04, 500, $payout);
$softbankTotal = softbank($creditSum, 1.03, 1000, $payout);
$strawberryBankTotal = strawberryBank($creditSum, 1.02, 7777, $payout);

echo "homoCredit: {$homoCreditTotal} руб. \n";
echo "softbank: {$softbankTotal} руб. \n";
echo "strawberryBank: {$strawberryBankTotal} руб. \n";