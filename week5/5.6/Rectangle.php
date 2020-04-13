<?php
//concrete class
class Rectangle extends Polygon{
    public $width;
    public $height;
    
    public function getArea(){
        return ($this->width * $this->height);
    }
    public function getNumberOfSides(){
        return(4);
    }
}
?>