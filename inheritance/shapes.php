<?php

abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }    

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea(); 
}//end Shape

class Square extends Shape
{
    protected $length = 4;
    
    public function getArea()
    {
        //logic to get area with exponential expression pow()
        return pow($this->length, 2);
    }
}//end Square

class Triangle extends Shape
{
    protected $base = 4;
    protected $height = 7;

    //this getArea takes precedence over parent getArea method
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}//end Triangle

class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}//end Circle

(new Circle)->getArea();

var_dump("Circle: ". $circle);