<?php

$str = "Hello my dear freshman!";

// Проверка куки
// Глобальный массив $_COOKIE хранит ключ "flag"
// Ф-ция isset определяет, установлено ли значение в $_COOKIE["flag"]
// (Возращает true если установлено любое значение кроме NULL)
if (isset($_COOKIE["flag"]))
{
    $str = "Welcome back, my friend!";
}
else
{
    setcookie("flag", "1", time() + 15);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p align="center"><?php echo $str; ?></p>
    </body>
</html>