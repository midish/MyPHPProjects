<!--

    ЗАПИСАТЬ  В                         кол-во полей должно с-вовать таблице
    INSERT INTO название_таблицы VALUES (value1, value2, value3)
    INSERT INTO new_category VALUES (NULL, "New category", '', 1, 1);

    так же можно использовать другой вид записи
    // записывает в name - '111', в 'description' - '222';
    INSERT INTO new_category (name, 'description') VALUES ('111', '222');

    Таким образом можно вставить несколько записей 
    INSERT INTO new_category (name, 'description') VALUES ('111', '222'), ('333', '444');

-->

<!--

    DELETE FORM table_name
    [WHERE condition(условие)]
    [ORDER BY field]
    [LIMIT quantity(кол-во)]

    удалит запись с id = 7 из news
    DELETE FROM news WHERE id="7";

    will delete all note from category_id = 1;
    DELETE FROM news WHERE category_id = 1;

    will delete all news for last five days
                        if date < current date, delete 
    DELETE FROM news WHERE date < DATE_SUB(CURDATE(), INTERVAL 5 DAY);
        CURDATE() - date now
        INTERVAL 5 DAY - interval for 5 days
        DATE_SUB(a, b) - from a deduct(вычитает) b

    в таблице news отсортировать по дате и удалить последние 3 новости
    DELETE FROM news ORDER BY date DESC LIMIT 3;

-->

<!--

    Обновление уже существющих полей
    UPDATE table
    SET field1 = expression1,
        field2 = expression2,
        ...
    WHERE...
    [OREDER BY field]
    [LIMIT quantity strings];

-->

<!--

    Получение информации
    SELECT what_choose
        [FROM table
        WHERE условие
        GROUP BY field
        ORDER BY field
        LIMIT quantity]]

    Выбрать все данные из таблицы news
    SELECT * FROM 'news';

    Выбор конкретных полей
    SELECT id, content FROM 'news';

    Выбрать все новости автора с id = 1
    SELECT * FROM 'news' WHERE 'author_id'='1';

    Получить пять последних новостей в порядке от новых к старым
    SELECT * FROM 'news' ORDER BY date DESC LIMIT 5;

    Группировать по name
    SELECT * FROM 'user' GROUP BY name;

    SELECT name, COUNT(*) FROM 'user' GROUP BY name;
-->

<!--

    COUNT - кол-во строк в таблице
    SUM - сумма значений выбранного поля
    AVG - среднее значение по выбранному полю
    MAX, MIN - наибольшее и наименьшее значение данного поля

    Найти кол-во новостей
    SELECT COUNT (*) FROM news
    Найти кол-во новостей в опредленном месте
    SELECT COUNT (*) FROM news WHERE 'category_id'='1'

    Наибольшее и наименьшее значение поля
    SELECT MAX (id) FROM 'news';


-->

<?php 
//                    address host, login, pass,  name of DB
$con = mysqli_connect("localhost", "root", "root", "myFirstDB");
mysqli_set_charset($con, "utf8");

// Check connection
if (mysqli_connect_errno()) 
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Var $query keep MySQL request
$query = "INSERT INTO news_category VALUES (NULL, 'New category 44', 'Discription 22', 1, 1);";
// With it func, I can make request to data base
// This function return true if success or false if fail
$info = mysqli_query($con, $query);

// status = 1 новость отображается
// status = 0 новость скрыта
// обновить статус news с 1 на 0
$queryUpdate = "UPDATE news SET status='0';";
$info = mysqli_query($con, $queryUpdate);

// Изменение заголовка новости
$queryUpdateh1 = "UPDATE news SET h1='New header' WHERE id='4';" ;
$info = mysqli_query($con, $queryUpdateh1);

// Выбрать все записи из траблицы новости
$querySelect = "SELECT * FROM news;";
$result = mysqli_query($con, $querySelect);

// Сколько результатов было получено из таблицы
$count = mysqli_num_rows($result);
// echo $count;

// Приносит одну строку из таблицы
//$row1 = mysqli_fetch_array($result);
//print_r($row1);

// Если есть какие-то записи (!=0)
if ($count)
{
    // Будет выполняться Пока можно достать результаты из таблицы (true)
    while ($row = mysqli_fetch_array($result))
    {
        echo '<h2>';
        echo $row['h1'];
        echo '</h2>';
    }
}
?>