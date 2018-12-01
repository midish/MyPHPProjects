<?php
// Для того что бы работать с сессиями вызываю ф-цию session_start();
session_start();
// Записываю значение из массива $_POST в переменную $answer1
// значение в $_POST попадает из формы которая передаёт значение из task1.php
// в task2.php методом post и т.д. для последующих страниц
$answer1 = $_POST['answer1'];

// Записываю значение из $answer1 в глобальный массив $_SESSION
$_SESSION['answer1'] = $answer1;

?>

<p>Question 2:</p>
<p>3 + 3 = ?</p>

<form action="task3.php" method="post">
    <input type="text" name="answer2">
    <input type="submit">
</form>