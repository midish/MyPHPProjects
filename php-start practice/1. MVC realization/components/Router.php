<?php

class Router
{
    // Это массив в которм будут храниться маршруты
    private $routes;

    public function __construct()
    {
        // Указывает путь к роутам
        $routesPath = ROOT.'/config/routes.php';
        // Присваиваем свойству $routes массив который хранится в файле routes.php
        $this->routes = include($routesPath);
    }

    /**
     * Returne request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) 
        {
            return trim($_SERVER['REQUEST_URI'], '/');
            //return substr($_SERVER['REQUEST_URI'], strlen('/'));
        }
    }

    // МЕТОД run будет принимать управление от FRONT CONTROLLER
    public function run()
    {
        //print_r($this->routes);
        //echo '<br>Class Router, method run';
        
        // Получаем строку запроса
        $uri = $this->getURI();
        //echo $uri;

        // Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            // echo "<br>$uriPattern -> $path";
            // Сравниваем $uriPattern и $uri
            if (preg_match("~^$uriPattern~", $uri))
            {

                // echo '<br>Где ищем (запрос, который набрал пользователь): ' . $uri;
                // echo '<br>Что ищем (совпадение из правила): ' . $uriPattern;
                // echo '<br>Кто обрабатывает: ' . $path;

                /**
                 * В $uri ищем параметры (например ../sport/114) по определеннону
                 * который содержится в ~$uriPattern~
                 * если параметры найдены, то в строку $path подставляются эти параметры
                 *  */
                $internalRoute = preg_replace("~^$uriPattern~", $path, $uri);
                
                //echo '<br>Нужно сформировать: ' . $internalRoute;
                //echo $path;

                // Ф-ция explode делит строку на '/' в $path
                $segments = explode('/', $internalRoute);

                // echo '<pre>';
                // print_r($segments);
                // echo '</pre>';
                
                // Получаем имя контроллера 
                // Ф-ция array_shift() получает первое значение эл-та массива и удаляет его
                $controllerName = array_shift($segments).'Controller';
                // Ф-ция ucfirst() делает первую букву стоки заглавной uppercasefirst
                $controllerName = ucfirst($controllerName);
                //echo $controllerName;

                $actionName = 'action'.ucfirst(array_shift($segments));
                //echo $actionName;

                // echo '<br>Класс: '.$controllerName;
                // echo '<br>Метод: '.$actionName;
                $parameters = $segments;
                // echo '<pre>';
                //print_r($parameters);

                // Подключить файл класса-контроллера
                // определяем файл который нужно подключить
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                
                // Ф-ция file_exists() проверяет, существует ли такой файл на диске
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создать ОБЪЕКТ, вызвать МЕТОД (т.е. action)
                $controllerObject = new $controllerName;

                // $result = $controllerObject->$actionName($parameters);
                // if ($result != null) {
                //     break;
                // }

                /**
                 * Вызывает action который содержится в $actionName у ОБЪЕКТА $controllerObject
                 * при этом передаёт ему массив с $parameters 
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                // Если МЕТОД контроллера успешно вызван, завершаем работу роутера
                if ($result != null) {
                    break;
                }
            }
        }
    }
}