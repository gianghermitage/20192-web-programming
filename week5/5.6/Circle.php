<?php

class Circle extends \shape\Shape {

    public $radius;

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

}

?>