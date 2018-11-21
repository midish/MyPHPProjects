<?php

error_reporting(-1);

/* Варианты ответов в массиве */
$answers = array(
    1 => 'Yes',
    2 => 'No',
    3 => 'Don\'t know',
    4 => 'Never',
    5 => 'It depend from you',
    6 => 'Ask another person'
);

$question = 'Will I learn PHP without registration and SMS?';
$random = array_rand($answers);
$answer = $answers[$random];

echo "Question: {$question}\n";
echo "Answer: {$answer}\n";