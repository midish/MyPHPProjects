<?php

if (isset($_COOKIE["lastvisit"]))
{
    $date = "You have been visited that page at ".$_COOKIE["lastvisit"];
}
else
{
    $date = "Welcome!";
}

setcookie("lastvisit", date('d-m-Y h:i:s'));

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <p align="center"><?php echo $date ?></p>
</body>
</html>