<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getter()
    {
        return "a là: " . $this->a . "; b là : " . $this->b . "; c là :" . $this->c;
    }

    public function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return ((-$this->b) + pow($this->getDiscriminant(), 0.5)) / 2 * $this->a;
    }

    public function getRoot2()
    {
        return ((-$this->b) - pow($this->getDiscriminant(), 0.5)) / 2 * $this->a;
    }

    public function showResult()
    {
        if ($this->getDiscriminant() > 0) {
            return "nghiem thu nhat la: " . $this->getRoot1() . "</br>" . "nghiem thu hai la : " . $this->getRoot2();
        } elseif ($this->getDiscriminant() == 0) {
            return "nghiem kep la: " . $this->getRoot1() . "</br>";
        }else{
            return "phuong trinh vo nghiem";
        }
    }
}