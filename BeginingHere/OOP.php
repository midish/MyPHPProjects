<?php

error_reporting(-1);
mb_internal_encoding('utf-8');

// Объявляет новый класс Question
class Question
{
    // У всех объектов этого класса есть свойства
    // Например text, points, answers, correctAnswers
    // Слово «public» обозначает, что эти свойства объекта можно читать и менять из
    // любого места программы 
    public $text;           // текст вопроса
    public $points = 5;     // число баллов, по умолчанию 5
    public $answers;        // варианты ответов
    public $correctAnswer;  // правильный ответ
}

// Создание новых ОБЪЕКТОВ класса Question
// $q1 = new Question;
// $q2 = new Question;
// $q3 = new Question;

// Показывает содержимое ОБЪЕКТА класса Question
//var_dump($q1);


// Функция, создающая массив с вопросами:
function createQuestions()
{
    // Создаем пустой массив
    $questions = [];

    // Создаем и заполняем первый объект
    // Вопрос 1
    $q1 = new Question;
    $q1->text = "Какая планета располагается четвертой по счету от Солнца?";
    $q1->points = 10; // 10 баллов за ответ
    $q1->answers = array('a' => 'Венера', 'b' => 'Марс', 'c' => 'Юпитер', 'd' => 'Меркурий'); // Варианты ответа
    $q1->correctAnswer = 'b'; // Правильный ответ
    // Кладем вопрос в массив
    // В массиве хранится объёкт $q1
    $questions[] = $q1;

    // Создаем второй объект
    // Вопрос 2
    $q2 = new Question;
    $q2->text = 'Какой город является столицей Великобритании?';
    $q2->points = 5;
    $q2->answers = array('a' => 'Париж', 'b' => 'Москва', 'c' => 'Нью-Йорк', 'd' => 'Лондон');
    $q2->correctAnswer = 'd';
    // Кладем вопрос в массив
    $questions[] = $q2;

    // Вопрос 3
    $q3 = new Question;
    $q3->text = 'Кто придумал теорию относительности?';
    $q3->points = 30;
    $q3->answers = array('a' => 'Джон Леннон', 'b' => 'Джим Моррисон', 'c' => 'Альберт Эйнштейн', 'd' => 'Исаак Ньютон');
    $q3->correctAnswer = 'c';

    $questions[] = $q3;
    return $questions;
}

// Принимает массив с вопросами
//
function printQuestions($questions)
{
    $number = 1; // номер вопроса

    foreach ($questions as $question) {
        echo "{$number}. {$question->text}\n";

        echo "Варианты ответов:\n";

        foreach ($question->answers as $letter => $answer) {
            echo "  {$letter}. {$answer}\n";
        }

        $number++; 
    }
}

function checkAnswers($questions, $answers)
{
    // Проверим, что число ответов равно числу вопросов (защищаемся от ошибки)
    // Если кол-во эл-то в массивах НЕ равны
    if (count($questions) != count($answers)) {
        exit("Число ответов и вопросов не совпадает\n");
    }

    $pointsTotal = 0; // сколько набрано баллов

    // сколько можно набрать баллов при всех правильных ответах
    $pointsMax = 0;  
    // сколько отвечено верно
    $correctAnswers = 0; 

    $totalQuestions = count($questions); // Сколько всего вопросов

    // Цикл для обхода вопросов и ответов
    for ($i = 0; $i < count($questions); $i++) {
        $question = $questions[$i]; // Текущий вопрос
        $answer = $answers[$i]; // текущий ответ

        // Считаем максимальную сумму баллов
        $pointsMax += $question->points;

        // Проверяем ответ
        if ($answer == $question->correctAnswer) {
            // Добавляем баллы
            $correctAnswers ++;
            $pointsTotal += $question->points;
        } else {
            // Неправильный ответ
            $number = $i + 1;
            echo "Неправильный ответ на вопрос №{$number} ({$question->text})\n";
        }
    }

    // Выведем итог
    echo "Правильных ответов: {$correctAnswers} из {$totalQuestions}, баллов набрано: {$pointsTotal} из {$pointsMax}\n";
}

// В $questions помещается массив хранящий объекты класса Question
$questions = createQuestions();
// Выводит на экран все объекты(вопросы) которые храняться в $questions
printQuestions($questions);
// Абстрактный массив с ответами на вопросы из $questions
$answers = array('b', 'd', 'a');
// Функция проверяет проавильность ответов из $answers
checkAnswers($questions, $answers);