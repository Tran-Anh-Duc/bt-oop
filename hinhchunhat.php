<?php
class Rectangle{
    public   $width;
    public   $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    public function getWidth()
    {
        return $this->width;
    }


    public function setWidth($width)
    {
        $this->width = $width;
    }


    public function getHeight()
    {
        return $this->height;
    }


    public function setHeight($height)
    {
        $this->height = $height;
    }
//tinh dien tich
    public function getArea()
    {
        return $this->width * $this->height ;
    }
//tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height)*2);
    }



}
$rectangle = new Rectangle(10,20);
echo $rectangle->getArea()."<br>";
echo $rectangle->getPerimeter();









