<?php

class Publication
{
    // Свойства КЛАССА Publication полностью соответсвтуют ПОЛЯМ БД
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    // Конструктор принимает массив $row
    function __constuct($row)
    {
        // СВОЙСТВАМ присваем значения из массива $row
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];
    }
}

class NewsPublication extends Publication
{
    public function printItem()
    {
        // echo '<br>Вызван метод '.__METHOD__;
        // echo '<br> This is News';
        echo '<br>Новость: '.$this->title;
        echo '<br>Дата: '.$this->date;
        echo '<hr>';
        echo $row->title;
    }
}

class ArticlePublication extends Publication
{
    public function printItem()
    {
        // echo '<br>Вызван метод '.__METHOD__;
        // echo '<br> This is Article';
        echo '<br>Статья: '.$this->title;
        echo '<br>Автор: '.$this->author_name;
        echo '<hr>';
    }
}

class PhotoReportPublication extends Publication
{
    public function printItem()
    {
        // echo '<br>Вызван метод '.__METHOD__;
        // echo '<br> This is Photo Report';
        echo '<br>Фотоотчёт: '.$this->title;
        echo '<br><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSay11J6bV8ZRaKkE3mhK30HjqcqksP3w0l0c08YQG5SgXtNkMI">';
        echo '<hr>';
    }
}