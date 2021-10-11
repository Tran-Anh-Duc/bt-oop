<?php

class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    public function getA()
    {
        return $this->a;
    }


    public function setA($a)
    {
        $this->a = $a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function getDetal()
    {
        return (($this->b*$this->b) - (4 * $this->a * $this->c));

    }
    public function checkAB(){
        if ($this->a == 0){
            if ($this->b == 0){
                echo "phuong trinh vo nghiem";
                die();
            }else{
                echo "phuong trinh co mot nghiem".$this->c/$this->b;
                die();
            }
        }
    }

    public function giai(){
        $this->checkAB();
        if ($this->getDetal()< 0){
            echo "phuong trinh vo nghiem";
        }else if ($this->getDetal() === 0){
            echo "phuong trinh co nghiem kep "-$this->b/(2*$this->a);
        }else{
            $x1 = (-$this->b -sqrt($this->getDetal()))/(2*$this->a);
            $x2 = (-$this->b +sqrt($this->getDetal()))/(2*$this->a);
            echo "phuong trinh co 2 nghiem".$x1."va ".$x2 ;
        }
    }



}
$quadraticEquation = new QuadraticEquation(1,-6,5);
echo $quadraticEquation->giai()."<br>";
echo $quadraticEquation->getDetal();