<?php

// Определяю значение $count
$count = 1;

// Если в глобал массиве $_COOKIE есть ключ "visitCount" и он не равен NULL
if (isset($_COOKIE["visitCount"]))
{

    $count = intval($_COOKIE["visitCount"]);
    $count++;
    $str = "You have been visited this page $count times";
}
// Иначе выведет сообщение ниже
else
{
    $str = "Welcome freshman!";
}

setcookie("visitCount", $count);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <!-- выводит в абзаце <p> строку $str -->
    <p align="center"><?php echo $str ?></p>
</body>
</html>