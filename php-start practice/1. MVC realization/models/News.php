<?php

class News
{
    /**
     * Returns single news item with specified id
     * @param integer $id
     */
    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {

            $db = Db::getConnection();

            // $host = 'mysite.local';
            // $dbname = 'mvc_site';
            // $user = 'root';
            // $password = 'root';
            // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

            $result = $db->query('SELECT * from news WHERE id=' . $id);

            //$result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();
            //print_r($newsItem);
            return $newsItem;
        }
    }

    /**
     * Returns an array of  news items
     */
    public static function getNewsList()
    {

        $db = Db::getConnection();

        // $host = 'mysite.local';
        // $dbname = 'mvc_site';
        // $user = 'root';
        // $password = 'root';
        // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        // массив для резултатов
        $newList = array();

        // выбрать 10 последних новостей из таблицы новости
        $result = $db->query('SELECT id, title, date, short_content '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $newList[$i]['id'] = $row['id'];
            $newList[$i]['title'] = $row['title'];
            $newList[$i]['date'] = $row['date'];
            $newList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newList;
    }
}