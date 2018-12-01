<?php

    if (isset($_COOKIE['name']))
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
        <title>Page page.php</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Page page.php</h1>
        <a href="index.php">Page index.php</a>
        <p>Hello, <?php echo $name; ?></p>
    </body>
</html>