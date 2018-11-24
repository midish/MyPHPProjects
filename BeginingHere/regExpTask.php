<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

/* 
Напиши программу, получающую на вход автомобильный номер, и проверяющую, 
правильно ли он введен. Автомобильный номер имеет вид «а123вг», то есть 
начинается с буквы, за которой идет 3 цифры, и еще 2 буквы. Никаких 
посторонних символов быть в нем не должно.
Эту программу надо решить с помощью preg_match() и регулярного выражения. 
*/

$regexp = '/^[а-яё][0-9]{3}[а-яё]{2}$/u';
$inputData = 'ё123ба';

if (preg_match($regexp, $inputData))
{
    echo "Car number was found\n";
}
else
{
    echo "Car number wasn't found\n";
}

/*
Дан текст, который по идее должен быть номером телефона в виде 
8-(911)-506 56 56 (т.е. человек может ввести не только цифры, но 
и скобки, минусы, может что-то еще). Но в реальности, пользователь 
может вместо номера написать что угодно. Напиши скрипт для проверки 
правильности введенного номера («8(911)-506 56 56» — правильный 
номер, «8-911-50-656-56» — правильный, «89115065656» — правильный, 
«02» — неправильный, «89115065656 позвать Люду» — неправильный).
*/

$phoneNumRegExp = '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/ui';
/*
    1. Телефон может начинаться на 8 и +7
    2. Между цифрами могут быть пробелы
    3. Между цифрами могут быть скобки
    4. Между цифрами могут быть тире
*/
// Правильные: 
$correctNumbers = 
[ 
    '84951234567',  '+74951234567', '8-495-1-234-567', 
    ' 8 (8122) 56-56-56', '8-911-1234567', '8 (911) 12 345 67', 
    '8-911 12 345 67', '8 (911) - 123 - 45 - 67', '+ 7 999 123 4567', 
    '8 ( 999 ) 1234567', '8 999 123 4567'
];

// Неправильные: 
$incorrectNumbers = 
[
    '02', '84951234567 позвать люсю', '849512345', '849512345678', 
    '8 (409) 123-123-123', '7900123467', '5005005001', '8888-8888-88',
    '84951a234567', '8495123456a', 
    '+1 234 5678901', /* неверный код страны */
    '+8 234 5678901', /* либо 8 либо +7 */
    '7 234 5678901' /* нет + */
];

foreach ($correctNumbers as $newCorrectNum)
{
    if (preg_match($phoneNumRegExp, $newCorrectNum))
    {
        echo "Number is correct\n";
    }
    else
    {
        echo "Number isn't correct, try again\n";
    }
}

// Поиск ссылок на сайты
$text = 'Please don\'t enter to addres http://2ch.so/b if you 
            want save your life, better enter to http://google.com';
$regexp2 = '!http://([a-z0-9.-]+)(/\\S+)?!';
$matches = array();

$count = preg_match_all($regexp2, $text, $matches);
echo "Referes found: {$count}\n";
var_dump($matches);

$count2 = preg_match_all($regexp2, $text, $matches, PREG_SET_ORDER);
echo "Referes found: {$count}\n";
var_dump($matches);

// Swap text to 
$text2 = "On the street sat cat and dog!\n";
$regexp3 = '/dog|cat/u';
$result = preg_replace($regexp3, '*$0*', $text2);
$result1 = preg_replace($regexp3, 'animal', $text2);

echo $result;
echo $result1;
