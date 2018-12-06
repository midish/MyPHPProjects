<?php

session_start();

// получаю данные из глобального массива $_SESSION
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];

$answer3 = $_POST['answer3'];

if (($answer1 == 4) && ($answer2 == 6) && ($answer3 == 8))
{
    echo "All right, you are cool boy!";
}
else
{
    echo "Not right answers, try again";
}
?>

<br>
<a href="task1.php">Start of questions</a>
<p>You result</p>
