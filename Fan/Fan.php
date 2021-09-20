<?php
define('slow', '1');
define('medium', '2');
define('fast', '3');

class Fan
{
    private $speech = slow;
    public $radius = 5;
    public $color = "blue";
    private $onOff = false;

    public function __construct()
    {
        $this->color;
        $this->onOff;
        $this->radius;
        $this->speech;
    }

    public function getSpeech(){
        return $this->speech;
    }
    public function getColor(){
        return $this->color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getSatus(){
        return $this->onOff;
    }
    public function setSpeech($speech){
        return $this->speech = $speech;
    }
    public function setColor($color){
        return $this->color = $color;
    }
    public function setRadius($radius){
        return $this->radius = $radius;
    }
    public function setSatus($status){
        return $this->onOff = $status;
    }
    public function toString(){
;        if($this->onOff == true){
            return "Fan is on "."-color: ".$this->getColor()." -speech: ".$this->getSpeech()." -radius: ".$this->getRadius();
        }
        else{
            return "fan is off -"."color: ".$this->getColor()." -radius: ".$this->getRadius();
        }
    }
}
