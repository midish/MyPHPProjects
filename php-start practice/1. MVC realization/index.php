<?php

// FRONT CONTROLLER

// 1. Общие настройки
// Ф-ции отображают ошибки, используются на время разработки сайта
ini_set('display_errors', 1);
error_reporting(E_ALL);


// 2. Подключение файлов системы
// константа ROOT будет хранить ф-цию dirname()
// dirname() - указывает полный путь к файлу на диске
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//print_r(ROOT);


// 3. Установка соединения с БД


// 4. Вызов Router
$router = new Router();
$router->run();