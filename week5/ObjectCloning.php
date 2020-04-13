<?php

class ObjectTracker{
    private static $nextSerial = 0;
    private $id,$name;
    
    function __construct($name) {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }
    
    function __clone() {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }
    function getID(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    
}
    $ot = new ObjectTracker("obj1");
    $ot2 = clone $ot;
    $ot2->setName("another obj");
    
    print($ot->getID()." ".$ot->getName()."<br>");
    print($ot2->getID()." ".$ot2->getName()."<br>");
    
?>