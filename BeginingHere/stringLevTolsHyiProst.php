<?php

error_reporting(-1);

$word1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
$word2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
$word3 = array('прикосновений', 'поползновений', 'судьбы явлений',
 'сухие листья', 'морщины смерти', 'долины края', 'замены нету', 
'сухая юность', 'навек исчезнув');
$word4 = array('обретаю', 'понимаю', 'начертаю', 'закрываю', 'оставляю',
 'вынимаю', 'умираю', 'замерзаю', 'выделяю');
$word5 = array('очертания', 'безысходность', 'начертанья', 'смысл жизни',
 'вирус смерти', 'радость мира');

for ($i = 0; $i < 2; $i++)
{
    $random1 = array_rand($word1);
    $random2 = array_rand($word2);
    $random3 = array_rand($word3);
    echo "{$word1[$random1]} {$word2[$random2]} {$word3[$random3]}\n";

}

$random4 = array_rand($word4);
$random5 = array_rand($word5);

echo "Я {$word4[$random4]} {$word5[$random5]}\n";

$string1 = "Hello World!";
$var1 = mb_strlen($string1);
echo "{$var1}";