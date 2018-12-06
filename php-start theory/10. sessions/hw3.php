<?php
// Для того что бы работать с сессиями вызываю ф-цию session_start();
session_start();
// Записываю значение из массива $_POST в переменную $answer1
// значение в $_POST попадает из формы которая передаёт значение из task1.php
// в task2.php методом post и т.д. для последующих страниц
$answer2 = $_POST['answer2'];

// Записываю значение из $answer1 в глобальный массив $_SESSION
$_SESSION['answer2'] = $answer2;

?>


<form action="hwresult.php" method="post">
    <p>Who president of Russia?</p>
    <input type="radio" name="answer3" value="putin">Putin<br>
    <input type="radio" name="answer3" value="tramp">Tramp<br>
    <input type="radio" name="answer3" value="merkel">Merkel<br>
    <input type="submit" value="Next" name="submit">
</form>