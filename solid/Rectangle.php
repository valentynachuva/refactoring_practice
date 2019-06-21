<?php

//Hint - Liskov Substitution Principle
abstract class Figure
{
    public $width;
    public $height;
    public function __construct($width = 0, $height = 0)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
    abstract function area();
}
class Rectangle extends Figure
{
    public function area()
    {
        return $this->height * $this->width;
    }
}

class Square extends Figure
{
    protected $size;

    public function setSize($size)
    {
        $this->size = $size;
    }
    public function getSize($size)
    {
        $this->size = $size;
    }
    public function area()
    {
        return $this->height * $this->width;
    }
}

class RectangleTest
{
    private $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function testArea()
    {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
        if ($this->rectangle->area() !== 6) {
            return "Bad area \n";
        } else {
            return "Test passed! \n";
        }
    }
}

$rectangle = new Rectangle();
echo "Calc area for rectangle \n";
$rectangleTest = new RectangleTest($rectangle);
echo $rectangleTest->testArea();

$square = new Square();
echo "Calc area for square \n";
$rectangleTest = new RectangleTest($square);
echo $rectangleTest->testArea();
