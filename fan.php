<?php

class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private int $speed = 1;
    private bool $on = false;
    private float $radius = 5;
    private string $color = "blue";

    public function __construct($speed, $on, $radius, $color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }


    public function getSpeed(): int
    {
        return $this->speed;
    }


    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }


    public function getOn(): bool
    {
        return $this->on;
    }


    public function setOn(bool $on): void
    {
        $this->on = true;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function toString():string
    {
        if ($this->getOn() == true){
           $str =  "fan is on ".$this->speed." "." ".$this->radius." ".$this->color;
        }else{
           $str=  "fan is off ".$this->speed." "." ".$this->radius." ".$this->color ;
        }
        return $str;
   }

}

$fan1 = new Fan(1,true,5,"blue");
$fan2 = new Fan(2,false,5,"blue");
echo $fan1->toString()."<br>";
echo $fan2->toString();
