<?php

/*
Задача 1:
    1) Создать класс Figure - плоская геометрическая фигура. У этого класса есть такие 
    свойства: площадь, цвет. И константа: количество сторон.
    2) Для класса Figure написать метод infoAbout(). Этот метод возвращает сообщение:
    "Это геометрическая фигура!".
    3) От класса Figure унаследовать классы: Rectangle, Triangle, Square.
    4) Добавить для Rectangle приватные свойства a,b - длины сторон.
    5) Добавить для Square приватное свойство a - длина стороны.
    6) Добавить для Triangle приватные свойства a, b, c - длины сторон.
    7) Для каждого из классов Rectangle, Triangle, Square определить значение 
    константы: количество сторон.
    Например, для квадрата: const SIDES_COUNT = 4;
    8) Создать конструкторы для классов Rectangle, Triangle, Square для инициализации
    значений длин сторон.
    (Подсказка: принцип такой же, как и в предыдущем занятии – ООП #1).
    9) Для каждого из классов Rectangle, Triangle, Square реализовать метод getArea() -
    подсчет площади. Методы возвращают значение площади. Подсказки ниже.
    10) Для каждого из классов Rectangle, Triangle, Square переопределить метод 
    infoAbout() так, что б он возвращал строку такого содержания: (пример для квадрата):
    "Это класс квадрата. У него 4 стороны".
    Аналогично для других классов.
    Подсказка: использовать константу класса для вывода количество сторон.
    11) Сделать методы infoAbout() финальными.
    12) Для каждого класса Rectangle, Triangle, Square создать по 2 объекта 
    (с передачей значений длин сторон в конструктор).
    13) Вызвать для всех объектов методы getArea(), вывести результаты. 
*/

// *1*
class Figure
{
    public $square;
    public $color;
    const SIDES = 4;

    // *2*
    public function infoAbout()
    {
        echo "Это геометрическая фигура!";
    }
}

// *3*
class Rectangle extends Figure
{
    // *4*
    private $a;
    private $b;

    // *8*
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getArea()
    {
        $area = $this->a * $this->b;
        return $area;
    }
    // *10* *11*
    final public function infoAbout()
    {
        echo "Это класс прямоугольник. У него ".self::SIDES." стороны";
    }
}
class Triangle extends Figure
{
    // *6*
    private $a;
    private $b;
    private $c;
    // *7*
    const SIDES = 3;
    // *8*
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        $area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $area;
    }
    // *10* *11*
    final public function infoAbout()
    {
        echo "Это класс треугольник. У него ".self::SIDES." стороны";
    }
}
class Square extends Figure
{
    // *5*
    private $a;
    // *8*
    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getArea()
    {
        $area = $this->a * $this->a;
        return $area;
    }
    // *10* *11*
    final public function infoAbout()
    {
        echo "Это класс квадрата. У него ".self::SIDES." стороны";
    }
}

// *12*
$rectange1 = new Rectangle(2, 5);
$rectange2 = new Rectangle(5, 10);

$triangle1 = new Triangle(1, 2, 3);
$triangle2 = new Triangle(4, 5, 6);

$square1 = new Square(5);
$square2 = new Square(10);

// *13*
echo "<br>".$rectange1->getArea();
echo "<br>".$rectange2->getArea()."<br>";
Rectangle::infoAbout();

echo "<br>".$triangle1->getArea();
echo "<br>".$triangle2->getArea()."<br>";
Triangle::infoAbout();

echo "<br>".$square1->getArea();
echo "<br>".$square2->getArea()."<br>";
Square::infoAbout();