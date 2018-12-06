<?php

session_start();

$answer1 = $_POST['answer1'];

$_SESSION['answer1'] = $answer1;

?>


<form action="hw3.php" method="post">
    <p>Satelite of earth?</p>
    <input type="radio" name="answer2" value="deimos">Deimos<br>
    <input type="radio" name="answer2" value="io">Io<br>
    <input type="radio" name="answer2" value="moon">Moon<br>
    <input type="submit" value="Next" name="submit">
</form>