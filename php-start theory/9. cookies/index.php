<?php

    error_reporting(-1);

    if (isset($_POST['name']) && (!empty($_POST['name'])))
    {
        $name = $_POST['name'];
        echo $name;
        setcookie('name', $name, time() + 15);        
    }
    elseif (isset($_COOKIE['name']))
    {
        $name = $_COOKIE['name'];
    }
    else
    {
        $name = 'Guest';
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page index.php</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Page index.php</h1>
        <a href="page.php">Page page.php</a>
        <br><br>
        <p>Hello, <?php echo $name; ?></p>
        <form method="post">
            <input type="text" name="name"/>
            <input type="submit"/>
        </form>
    </body>
</html>