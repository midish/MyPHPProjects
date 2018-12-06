<?php

// GET ALL DATA -> array ($publication)

// Подключил файл classes.php для использования КЛАССОВ
require_once 'classes.php';

// Массив, который будет хранить результат
$publications = array();

// // Создаю ОБЪЕКТЫ КЛАССОВ 
// $news1 = new NewsPublication;
// $news2 = new NewsPublication;
// $arcitle1 = new ArticlePublication;
// $arcitle2 = new ArticlePublication;
// $photo1 = new PhotoReportPublication;

// $publication = array($news1, $news2, $arcitle1, $arcitle2, $photo1);

// // Таким способом можно добавлять новые ОБЪЕКТЫ в массив
// $publicationp[] = new NewsPublication;
// $publicationp[] = new NewsPublication;
// $publicationp[] = new ArticlePublication;
// $publicationp[] = new ArticlePublication;
// $publicationp[] = new PhotoReportPublication;

// Получени данных из БД
// Соединение с БД
$con = mysqli_connect("localhost", "root", "root", "polymorphism");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: ". mysqli_connect_errno();
}

// make query запрос
$result = mysqli_query($con, "SELECT * FROM publication");

// print_r($result);
// work with results получаем результат
// переменная $row содержит массив с полями из БД
while ($row = mysqli_fetch_array($result))
{
    //echo '<pre>';
    //print_r($row);
    //echo '<br>'.$row['date'];
    // Наполняем массив с публикациями
    // $publication[] = new NewsPublication;
    // $row['type'] содержит имена КЛАССОВ
    // new $row['type']($row); == new NewsPublication($row)
    // в $row содержится инфомация для конструктора
    $publications[] = new $row['type']($row);
}

//echo '<pre>';
//print_r($publications);