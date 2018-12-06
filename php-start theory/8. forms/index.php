<?php

include_once 'functions.php';
// С помощью ф-ции isset можно определить была ли отправлена форма
if (isset($_GET['submit']))
{
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    // Ф-ция empty проверяет на пустоту
    if (!empty($a) && !empty($b) && !empty($c))
    {
        $result = quadratic($a, $b, $c);

        if ($result != false)
        {
            print_r($result);
        }
        else
        {
            echo 'Root is nothing<br/>';
        }

        echo "From send: a = $a, b = $b, c = $c <br/>";
    } 
}

// ключ соответсвует значению переданного из html name="a"
$a = $_GET['a'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="index.php" method="get">
                A: <input type="text" name="a"><br>
                B: <input type="text" name="b"><br>
                C: <input type="text" name="c"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </body>
</html>