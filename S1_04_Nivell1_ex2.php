<?php

class Shape{
    public $ample;
    public $alt;

    public function __construct(int $ample, int $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public function getAmple(){
        echo "Ample: $this->ample";
    }

    public function getAlt(){
        echo "Alt: $this->alt";
    }

    public function setAmple(int $ample){
        $this->ample = $ample;
    }

    public function setAlt(int $alt){
        $this->alt = $alt;
    }
}

class Triangle extends Shape{

    public function calculAreaTriangle(){
        $areaTriangle = ($this->ample * $this->alt) / 2;
        echo "L'àrea del triangle és de: $areaTriangle";
    }
}

class Rectangle extends Shape{
    public function calculAreaRectangle(){
        $areaRectangle = $this->ample * $this->alt;
        echo "L'àrea del triangle és de: $areaRectangle";
    }
}



?>