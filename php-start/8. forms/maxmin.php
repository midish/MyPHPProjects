<?php

// С помощью ф-ции isset можно определить была ли отправлена форма
if (isset($_POST['submit']))
{
    // Принимаю значения методом $_POST
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];

    // Заношу принятые значения в массив
    $arr = array($a, $b, $c, $d, $e, $f, $g);


    // Ф-ция empty проверяет на пустоту
    if (!empty($a) && !empty($b) && !empty($c) && !empty($d) && !empty($e) && !empty($f) && !empty($g))
    {
        $max = max($arr);
        $min = min($arr);
        $medArf = array_sum($arr) / count($arr);

        echo "Form send: a = $a, b = $b, c = $c, d = $d, e = $e, f = $f, g = $g<br/>";
        echo "MAX = $max, MIN = $min, MEDIUM = $medArf<br/>";
    } 
}

// ключ соответсвует значению переданного из html name="a"
// $a = $__POST['a'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>POST</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <!-- создаю форму для отправки значений-->
            <form action="maxmin.php" method="post">
                1. <input type="text" name="a"><br>
                2. <input type="text" name="b"><br>
                3. <input type="text" name="c"><br>
                4. <input type="text" name="d"><br>
                5. <input type="text" name="e"><br>
                6. <input type="text" name="f"><br>
                7. <input type="text" name="g"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </body>
</html>