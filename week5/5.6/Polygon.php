<?php

include "Shape.php";
//abstract child class
abstract class Polygon extends \shape\Shape{
    abstract function getNumberOfSides();
}