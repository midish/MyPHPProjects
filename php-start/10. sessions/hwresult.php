<?php
// Для того что бы работать с сессиями вызываю ф-цию session_start();
session_start();
// Записываю значение из массива $_POST в переменную $answer1
// значение в $_POST попадает из формы которая передаёт значение из task1.php
// в task2.php методом post и т.д. для последующих страниц
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];

$answer3 = $_POST['answer3'];

$rightAnswers = ['kaliningrad', 'moon', 'putin'];

if ($answer1 == $rightAnswers[0] && $answer2 == $rightAnswers[1] && $answer3 == $rightAnswers[2])
{
    echo "<h2>All right, you are cool boy!</h2><br>";
    echo "<img src='https://gordonua.com/img/article/1415/14_tn.jpg'>";
}
else
{
    echo "<h2>You have mistakes, try again!</h2><br>";
    echo "<img src='https://st.depositphotos.com/1229718/2559/i/450/depositphotos_25594651-stock-photo-animal-abuse.jpg'>";
}

$_SESSION = array();
?>


<br>
<a href="hw1.php"><h2>Try again</h2></a>
<p>You result</p>