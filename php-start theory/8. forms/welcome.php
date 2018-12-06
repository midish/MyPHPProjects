<?php

// С помощью ф-ции isset можно определить была ли отправлена форма
if (isset($_POST['submit']))
{
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $gender = $_POST['gender'];

    if (!empty($firstName) || !empty($lastName))
    {
        if ($gender == "male")
        {
            echo "Welcome mister $firstName $lastName!<br/>";
        }
        elseif ($gender == "female")
        {
            echo "Welcome miss $firstName $lastName!<br/>";
        }
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
            <form action="welcome.php" method="post">
                <p>Enter you first and last name:</p>
                <input type="text" name="firstname"><br>
                <input type="text" name="lastname"><br>

                <p>You gender is:</p>
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </body>
</html>